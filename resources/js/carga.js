import esMX from "/public/js/es-MX.json";

function format(estado) {
    return `
        <table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">
            <tr><td>Clave Geografica:</td><td>${estado.clave_geo}</td></tr>
            <tr><td>Clave Area Geografica:</td><td>${estado.clave_area}</td></tr>
            <tr><td>Nombre:</td><td>${estado.nombre}</td></tr>
            <tr><td>Abreviatura:</td><td>${estado.abreviatura}</td></tr>
            <tr><td>Población:</td><td>${estado.poblacion}</td></tr>
        </table>
    `;
}

window.estadosInegi = async () => {
    let data = [];
    try {
        $("#pb-estados").removeClass("vanish");
        const response = await axios.get("/estados-inegi");
        console.log(response);
        if (response.data.data.length) {
            data = response.data.data;
        } else {
            $("#no-estados").removeClass("vanish");
        }
    } catch (error) {
        console.error("Error:", error);
    } finally {
        $("#pb-estados").addClass("vanish");
    }
    //
    if (data.length) {
        $("#dt-estados").removeClass("vanish");
        const table = $("#data-estados").DataTable({
            data,
            columns: [
                {
                    className: "details-control",
                    orderable: false,
                    data: null,
                    defaultContent: "",
                },
                { data: "nombre" },
            ],
            order: [[1, "asc"]],
            language: esMX,
        });
        //  Apertura info estado
        $("#data-estados tbody").on("click", "td.details-control", function () {
            const tr = $(this).closest("tr");
            const row = table.row(tr);

            if (row.child.isShown()) {
                row.child.hide();
                tr.removeClass("shown");
            } else {
                row.child(format(row.data())).show();
                tr.addClass("shown");
            }
        });
    }
};

window.cargaInegi = async () => {
    let msg = "";
    try {
        $("#modal-loading").removeClass("vanish");
        $("#modal-footer").addClass("vanish");
        const response = await axios.get("/carga-inegi");
        //  Mensaje
        msg = response.data.message;
        $("#modal-msg-response").text(msg);
        $("#modal-msg-info").addClass("vanish");
        $("#modal-msg-response").removeClass("vanish");
        //  Recarga
        $("#modal-options").addClass("vanish");
        $("#modal-reloaded").removeClass("vanish");
    } catch (error) {
        if (
            error.response &&
            error.response.data &&
            error.response.data.message
        ) {
            msg = error.response.data.message;
        } else if (error.message) {
            msg = error.message;
        }
        //  Mensaje
        $("#modal-msg-response").text(msg);
        $("#modal-msg-info").addClass("vanish");
        $("#modal-msg-response").removeClass("vanish");
        //  Recarga
        $("#modal-options").addClass("vanish");
        $("#modal-reloaded").removeClass("vanish");
    } finally {
        $("#modal-loading").addClass("vanish");
        $("#modal-footer").removeClass("vanish");
    }
};

document.addEventListener("DOMContentLoaded", () => {
    estadosInegi();
});

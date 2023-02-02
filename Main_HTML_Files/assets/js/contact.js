$( document ).ready(function() {
    cantactTableGet();
});

var contactDataT;
function cantactTableGet() {
    contactDataT = $("#contactTable").DataTable({
        paging: true,
        select: {
            style: 'multi'
        },
        dom: "Blfrtip",
        lengthChange: false,
        searching: true,
        ordering: true,
        info: true,
        scrollX: false,
        autoWidth: true,
        destroy: true,
        responsive: false,
        order: [[0, "desc"]],
        lengthMenu: [[10, 25, 50, -1], ['10', '25', '50', 'Hepsini Göster']],
        ajax: {
            url: "http://localhost/PHP-CASE-main/Main_HTML_Files/assets/php/getir.php",
            type: "GET",
            datatype: "json",
            dataSrc:""
        },
        buttons: [
            {
                extend: 'pageLength',
                orientation: 'landscape',
                className: "btn btn-info",
            }
        ],
        columns: [
            { data: "Id" },               //0
            { data: "Tarih" },            //1
            { data: "Ad" },               //2
            { data: "SoyAd" },            //3
            { data: "Telefon" },          //4
            { data: "Email" },            //5
            { data: "Mesaj" },            //6
        ],
        language: {
            url: "https://cdn.datatables.net/plug-ins/1.12.1/i18n/tr.json"
        },
        stateSave: true,
        stateSaveCallback: function (settings, data) {
            localStorage.setItem('DataTables_' + settings.sInstance, JSON.stringify(data))
        },
        stateLoadCallback: function (settings) {
            return JSON.parse(localStorage.getItem('DataTables_' + settings.sInstance))
        }
    });
}
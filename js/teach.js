$('document').ready(function () {
    loadGoods();
});
var cart = {

};
function loadGoods() {
    $.getJSON('goods.json', function (data) {
        //console.log(data);
        var out = '';
        for (var key in data) {
            out += '<div class="single-goods">';
            out += '<div class="img-json"><img src="' + data[key].image + '"></div>';
            out += '<p>' + data[key]['name'] + '</p>';
            out += '<p>' + data[key]['expensive'] + '</p>';
            out += '<p>' + data[key]['type'] + '</p>';
            out += '</div>';
        }
        $('#goods').html(out);
    })
}
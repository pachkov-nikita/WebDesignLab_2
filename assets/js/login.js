document.addEventListener('DOMContentLoaded', function() {
    var first = document.querySelectorAll('.modal');
    var second = M.Modal.init(first);
    console.log(first);
});
document.getElementById('menu-toggle').addEventListener('click', function() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.style.width = sidebar.style.width === '250px' || sidebar.style.width === '' ? '0' : '250px';
});

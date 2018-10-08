(function() {
    window.addEventListener('load',
    function() {
        var id = location.hash;
        if (id != '') {
            var obj = document.querySelector(id);
            if (obj !== null) {
                obj.setAttribute('tabindex', '-1');
                obj.focus();
            }
        }
    },
    null);

    var as = document.querySelectorAll("a[href^='#']");
    for (var i = 0,
    len = as.length; i < len; i++) {
        //如果href="#"无意义，忽略
        if (as[i].href == '#') {
            continue;
        }
        var obj = document.querySelector(as[i].href);
        if (obj !== null) {
            obj.setAttribute('tabindex', '-1');
        }
    }
    function landmark(role, label) {
        var rs = document.querySelectorAll('[role="' + role + '"]');
        for(var i = 0, len = rs.length; i < len; i++) {
            rs[i].setAttribute('aria-label', label);
        }
    }
    landmark('navigation', '导航');
    landmark('contentinfo', '版权与隐私');

})();
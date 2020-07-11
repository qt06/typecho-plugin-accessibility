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

    //处理锚链接点击后的聚焦问题
    var as = document.querySelectorAll("a[href^='#']");
    for (var i = 0,
    len = as.length; i < len; i++) {
        //如果href="#"或者 href 不是 # 开头的都无意义，忽略
        if (as[i].href == '#' || as[i].href.substring(0, 1) != '#') {
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
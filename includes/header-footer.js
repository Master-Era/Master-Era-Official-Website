(function () {

    "use strict";

    function initializeMasterEraHeader() {

        const toggle =
            document.getElementById("menuToggle");

        const menu =
            document.getElementById("navMenuWrap");


        if (!toggle || !menu) {
            return;
        }


        function openMenu() {

            menu.classList.add("is-open");

            toggle.classList.add("is-open");

            toggle.setAttribute(
                "aria-expanded",
                "true"
            );

        }


        function closeMenu() {

            menu.classList.remove("is-open");

            toggle.classList.remove("is-open");

            toggle.setAttribute(
                "aria-expanded",
                "false"
            );

        }


        toggle.addEventListener(
            "click",
            function (event) {

                event.preventDefault();

                event.stopPropagation();


                if (
                    menu.classList.contains(
                        "is-open"
                    )
                ) {

                    closeMenu();

                } else {

                    openMenu();

                }

            }
        );


        menu.addEventListener(
            "click",
            function (event) {

                if (
                    event.target.closest("a")
                ) {

                    closeMenu();

                }

            }
        );


        document.addEventListener(
            "click",
            function (event) {

                if (

                    !menu.contains(
                        event.target
                    )

                    &&

                    !toggle.contains(
                        event.target
                    )

                ) {

                    closeMenu();

                }

            }
        );


        window.addEventListener(
            "resize",
            function () {

                if (
                    window.innerWidth > 991
                ) {

                    closeMenu();

                }

            }
        );

    }


    if (
        document.readyState ===
        "loading"
    ) {

        document.addEventListener(
            "DOMContentLoaded",
            initializeMasterEraHeader
        );

    } else {

        initializeMasterEraHeader();

    }

})();
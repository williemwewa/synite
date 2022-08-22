<div style="outline:none" tabindex="-1" id="gatsby-focus-wrapper">
    <div id="accesskeys" class="accessibility_nav accessibility">
        <div class="inner-container is-flex"><span class="text">Go to</span>
            <ul class="list list-links is-flex">
                <li class="item"><a href="#menu" class="link_access_keys link-menu">Menu</a></li>
                <li class="item"><a href="#pagecontent" class="link_access_keys link-content">Contents</a></li>
                <li class="item"><a href="#search" class="link_access_keys link-search">Search</a></li>
                <li class="item"><a href="#footer" class="link_access_keys link-footer">Footer</a></li>
            </ul>
        </div>
    </div>
    <header class="header">
        <div class="headerTop">
            <div class="custom_wrapper">
                <div class="right_elem">
                    <div class="languages_component" tabindex="-1">
                        <a href="#" class="current_nav" tabindex="0" aria-haspopup="listbox" aria-labelledby="exp_elem exp_button" aria-expanded="false" id="exp_button">
                            .
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_main">
            <div class="burgerMenu">
                <a class="burger_btn" onclick="openHamburgerMenu()" href="#" aria-label="Voir le menu">
                    <div class="burger_icon"><span></span><span></span><span></span></div><span class="menu_text">Menu</span>
                </a>

                <script>
                    
                    function openHamburgerMenu() {
                        var menu = document.getElementById("PrimaryNavMenu");
                        menu.className += " show";
                    }

                    function closeHamburgerMenu() {
                        var menu = document.getElementById("PrimaryNavMenu");
                        menu.classList.remove("show");
                        console.log("Removed");
                    }
                    
                </script>


                <nav id="PrimaryNavMenu" class="burger_menu_sidebar " aria-hidden="true" tabindex="1">
                    <div  style="max-height:100vh">
                        <div class="simplebar-wrapper">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset">
                                    <div class="simplebar-content-wrapper">
                                        <div class="simplebar-content">
                                            <ul class="topnav">
                                                <li>
                                                    <a class="link_home" href="{{ route('home') }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="27.94" height="26.972" viewBox="0 0 27.94 26.972" aria-hidden="true"><g transform="translate(-309.821 -639.307)" fill="#ffffff"><path d="M325.206,639.893l11.97,11.971a2,2,0,0,1,0,2.828h0l-14.8-14.8h0A2,2,0,0,1,325.206,639.893Z"></path><path d="M322.377,639.893l-11.97,11.971a2,2,0,0,0,0,2.828h0l14.8-14.8h0A2,2,0,0,0,322.377,639.893Z"></path><path d="M334.729,650.087a1,1,0,0,0-1,1v12.552a.641.641,0,0,1-.64.64H314.495a.641.641,0,0,1-.641-.64V651.087a1,1,0,0,0-2,0v12.552a2.643,2.643,0,0,0,2.641,2.64h18.594a2.643,2.643,0,0,0,2.64-2.64V651.087A1,1,0,0,0,334.729,650.087Z"></path><path d="M325.433,654.654h-3.282a2.862,2.862,0,0,0-2.859,2.86v7.765a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1v-7.765A2.862,2.862,0,0,0,325.433,654.654Zm.859,2.86v6.765h-5v-6.765a.861.861,0,0,1,.859-.86h3.282A.861.861,0,0,1,326.292,657.514Z"></path></g></svg>
                                                    <span>Home</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a onclick="closeHamburgerMenu()" href="#" class="close_burger_menu">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12.971" height="12.142" viewBox="0 0 12.971 12.142" aria-hidden="true"><path fill="#ffffff" d="M245.878,724.846l3.656-3.657a2,2,0,0,0,0-2.828l-5.071,5.071-5.071-5.071a2,2,0,0,0,0,2.828l3.657,3.657-5.071,5.071a2,2,0,0,0,2.828,0l3.657-3.657,3.657,3.657a2,2,0,0,0,2.829,0Z" transform="translate(-237.978 -718.361)"></path></svg>
                                                        <span>Close</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            
                                             
                                            <ul class="main_nav">
                                                
                                                <li><a href="{{ route('about') }}">About</a></li>
                                                <li><a href="{{ route('our-team') }}">Our Team</a></li>
                                                <li><a href="{{ route('csr') }}">CSR</a></li>
                                                <li><a href="{{ route('products') }}">Products & Services</a></li>
                                                <li><a href="{{ route('safety') }}">Safety & Environment</a></li>
                                                <li><a href="{{ route('projects') }}">Projects</a></li>
                                                <li><a href="{{ route('contacts') }}">Contacts</a></li>
                                               
                                            </ul>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder"></div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal">
                            <div class="simplebar-scrollbar"></div>
                        </div>
                        <div class="simplebar-track simplebar-vertical">
                            <div class="simplebar-scrollbar"></div>
                        </div>
                    </div>
                </nav>
            </div>
            <nav class="nav_main" role="navigation" aria-label="Menu principale">
                <ul>
                    <li class="logo_elem" style="width: 16%;">
                        <a aria-current="page" title="Colas - Aller à la page d&#x27;accueil" class="" href="/">
                            <img src="/logo.png" alt="" style="height: 100%;" srcset="">
                        </a>
                    </li>
                    <li class="has_sub_menu">
                        <a isactive="false" href="{{ route('home') }}">Home</a>
                        
                    </li>
                    <li class="has_sub_menu">
                        <a isactive="false" href="{{ route('about') }}">About</a>
                        
                    </li>
                    
                    <li class="">
                        <a isactive="false" href="{{ route('our-team') }}" >Our Team</a>
                    </li>
                    <li class="">
                        <a isactive="false" href="{{ route('csr') }}">CSR</a>
                    </li>
                    
                    <li class="has_sub_menu"><a isactive="false" href="{{ route('products') }}">Products & Services</a>
                        
                    </li>
                    <li class="has_sub_menu"><a isactive="false" href="{{ route('safety') }}">Safety & Environment</a>
                        
                    </li>
                    <li class="has_sub_menu">
                        <a isactive="false" href="{{ route('projects') }}">Projects</a>
                    </li>
                   
                    <li class="">
                        <a isactive="false" href="{{ route('contacts') }}">Contacts</a>
                    </li>
                </ul>
            </nav>
             
        </div>
    </header>
     
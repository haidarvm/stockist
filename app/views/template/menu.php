<aside class="sidebar-nav-wrapper">
        <div class="navbar-logo">
            <a href="<?=base_url();?>">
                <img src="<?=base_url();?>assets/img/logo.png" width="90" alt="logo" />
            </a>
        </div>
        <nav class="sidebar-nav">
            <ul>
                <li class="nav-item active">
                    <a href="<?=base_url();?>">
                        <!-- <span class="icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.4166 7.33333C18.9383 7.33333 20.1666 8.56167 20.1666 10.0833V15.5833H16.4999V19.25H5.49992V15.5833H1.83325V10.0833C1.83325 8.56167 3.06159 7.33333 4.58325 7.33333H5.49992V2.75H16.4999V7.33333H17.4166ZM7.33325 4.58333V7.33333H14.6666V4.58333H7.33325ZM14.6666 17.4167V13.75H7.33325V17.4167H14.6666ZM16.4999 13.75H18.3333V10.0833C18.3333 9.57917 17.9208 9.16667 17.4166 9.16667H4.58325C4.07909 9.16667 3.66659 9.57917 3.66659 10.0833V13.75H5.49992V11.9167H16.4999V13.75ZM17.4166 10.5417C17.4166 11.0458 17.0041 11.4583 16.4999 11.4583C15.9958 11.4583 15.5833 11.0458 15.5833 10.5417C15.5833 10.0375 15.9958 9.625 16.4999 9.625C17.0041 9.625 17.4166 10.0375 17.4166 10.5417Z" />
                            </svg>
                        </span> -->
                        <span class="icon"><i class="lni lni-dashboard"></i></span>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="<?=base_url();?>stock/new">
                        <span class="icon"><i class="lni lni-inbox"></i></span>
                        <span class="text">Update Stock</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="<?=base_url();?>stock/new_multi">
                        <span class="icon"><i class="lni lni-bricks"></i></span>
                        <span class="text">Update Stock Multi</span>
                    </a>
                </li>
                <li class="nav-item nav-item-has-children">
                    <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_5"
                        aria-controls="ddmenu_5" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.58333 3.66675H17.4167C17.9029 3.66675 18.3692 3.8599 18.713 4.20372C19.0568 4.54754 19.25 5.01385 19.25 5.50008V16.5001C19.25 16.9863 19.0568 17.4526 18.713 17.7964C18.3692 18.1403 17.9029 18.3334 17.4167 18.3334H4.58333C4.0971 18.3334 3.63079 18.1403 3.28697 17.7964C2.94315 17.4526 2.75 16.9863 2.75 16.5001V5.50008C2.75 5.01385 2.94315 4.54754 3.28697 4.20372C3.63079 3.8599 4.0971 3.66675 4.58333 3.66675ZM4.58333 7.33341V11.0001H10.0833V7.33341H4.58333ZM11.9167 7.33341V11.0001H17.4167V7.33341H11.9167ZM4.58333 12.8334V16.5001H10.0833V12.8334H4.58333ZM11.9167 12.8334V16.5001H17.4167V12.8334H11.9167Z" />
                            </svg>
                        </span>
                        <span class="text"> Report </span>
                    </a>
                    <ul id="ddmenu_5" class=" dropdown-nav">
                        <li>
                            <a href="<?=base_url();?>stock"><i class="lni lni-list"></i> Stock </a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>stock_in"><i class="lni lni-inbox"></i> Stock In</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>stock_out"><i class="lni lni-chevron-up"></i> Stock Out</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>stock_all"><i class="lni lni-shuffle"></i> Stock All</a>
                        </li>
                        <!-- <li>
                            <a href="#"> By Item </a>
                        </li> -->
                    </ul>
                </li>
                <li class="nav-item nav-item-has-children">
                    <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_4"
                        aria-controls="ddmenu_4" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.66675 4.58325V16.4999H19.2501V4.58325H3.66675ZM5.50008 14.6666V6.41659H8.25008V14.6666H5.50008ZM10.0834 14.6666V11.4583H12.8334V14.6666H10.0834ZM17.4167 14.6666H14.6667V11.4583H17.4167V14.6666ZM10.0834 9.62492V6.41659H17.4167V9.62492H10.0834Z" />
                            </svg>
                        </span>
                        <span class="text">Master Data </span>
                    </a>
                    <ul id="ddmenu_4" class=" dropdown-nav">
                        <li>
                            <a href="<?=base_url();?>item"><i class="lni lni-cog"></i> Item </a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>user"><i class="lni lni-users"></i> User </a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>config/edit/1"><i class="lni lni-users"></i> Minimal Stock </a>
                        </li>
                        <!-- <li>
                            <a href="#"><i class="lni lni-sort-alpha-asc"></i> Acccount Name </a>
                        </li> -->
                    </ul>
                </li>
                <li class="nav-item nav-item-has-children">
                    <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_5"
                        aria-controls="ddmenu_5" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.58333 3.66675H17.4167C17.9029 3.66675 18.3692 3.8599 18.713 4.20372C19.0568 4.54754 19.25 5.01385 19.25 5.50008V16.5001C19.25 16.9863 19.0568 17.4526 18.713 17.7964C18.3692 18.1403 17.9029 18.3334 17.4167 18.3334H4.58333C4.0971 18.3334 3.63079 18.1403 3.28697 17.7964C2.94315 17.4526 2.75 16.9863 2.75 16.5001V5.50008C2.75 5.01385 2.94315 4.54754 3.28697 4.20372C3.63079 3.8599 4.0971 3.66675 4.58333 3.66675ZM4.58333 7.33341V11.0001H10.0833V7.33341H4.58333ZM11.9167 7.33341V11.0001H17.4167V7.33341H11.9167ZM4.58333 12.8334V16.5001H10.0833V12.8334H4.58333ZM11.9167 12.8334V16.5001H17.4167V12.8334H11.9167Z" />
                            </svg>
                        </span>
                        <span class="text"> Charts </span>
                    </a>
                    <ul id="ddmenu_5" class=" dropdown-nav">
                        <li>
                            <a href="<?=base_url();?>chart/stock"><i class="lni lni-list"></i> Stock </a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>chart/stock_in"><i class="lni lni-inbox"></i> Stock In</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>chart/stock_out"><i class="lni lni-chevron-up"></i> Stock Out</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>chart_all"><i class="lni lni-shuffle"></i> Stock All</a>
                        </li>
                        <!-- <li>
                            <a href="#"> By Item </a>
                        </li> -->
                    </ul>
                </li>
                <span class="divider">
                    <hr />
                </span>
            </ul>
        </nav>
    </aside>
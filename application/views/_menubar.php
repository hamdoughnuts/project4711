<?php
/*
 * Menu navbar, just an unordered list
 */
?>
<ul class="sidebar-nav">
    <li class="sidebar-brand">
        <a href="welcome">
            Amsterdam
        </a>
    </li>
    
    {menudata}
    <li><a href="{link}">{name}</a></li>
    {/menudata}
</ul>

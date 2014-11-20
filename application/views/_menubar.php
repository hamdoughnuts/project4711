<?php
/*
 * Menu navbar, just an unordered list
 */
?>
<ul class="sidebar-nav">
    <li class="sidebar-brand">
        <a href="/">
            AMSTERDAM
        </a>
    </li>

    {menudata}
    <li><a href="{link}" class="{class}">{name}</a></li>
    {/menudata}
</ul>

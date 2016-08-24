<?php 
/**
 * Return nav-here if current path begins with this path.
 *
 * @param string $path
 * @return string
 */
function setActiveAdmin($path)
{
    return Request::is( 'admin/' . $path . '*') ? ' active' :  '';
}

function setActiveEcommerceCategory($path)
{
    return Request::is( '/' . $path . '*') ? ' active' :  '';
}

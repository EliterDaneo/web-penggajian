<?php
if (!function_exists('is_active')) {
  function is_active($segment)
  {
    $CI = &get_instance();
    $current_segment = $CI->uri->segment(2); // Change segment number as needed
    return $current_segment == $segment ? 'active' : '';
  }
}
?>
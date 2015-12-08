<?php # Script 3.4 - index.php

//创建一个函数，用于输入广告：
function create_ad(){
	echo '<p class="ad">这是一则广告栏目位置。</p>';
}

$page_title = 'Welcom to this Site!';
include('includes/header.html');
create_ad();
?>
<h1>Content Header</h1>

<p>This is where the page-specific content goes. This section, and the corresponding header, will change from one page to the next.</p>

<p>Volutpat at varius sed sollicitudin et, arcu. Vivamus viverra. Nullam turpis. Vestibulum sed etiam. Lorem ipsum sit amet dolore. Nulla facilisi. Sed tortor. Aenean felis. Quisque eros. Cras lobortis commodo metus. Vestibulum vel purus. In eget odio in sapien adipiscing blandit. Quisque augue tortor, facilisis sit amet, aliquam, suscipit vitae, cursus sed, arcu lorem ipsum dolor sit amet.</p>

<?php
create_ad();
include('includes/footer.html'); 
?>
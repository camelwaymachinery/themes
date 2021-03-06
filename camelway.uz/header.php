<!DOCTYPE HTML>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title><?php dm_title()?></title>
<?php if(!is_404()){ ?>
<meta name="keywords" content="<?php dm_keywords();?>">
<meta name="description" content="<?php dm_description();?>">
<link rel="canonical" href="<?php dm_url();?>">
<?php }elseif(!is_404() && !is_topic()){ ?>
<link rel="amphtml" href="<?php dm_mobile_url();?>">
<?php } ?>
<link rel="stylesheet" type="text/css" href="<?php dminfo('stylesheet_url')?>?v=202005252">
<link rel="icon" href="//data.camelway.net/static/images/favicon.camelway.com.ico">
<meta property="og:locale" content="ru_RU">
<?php if(is_home()){ ?>
<meta property="og:type" content="website">
<?php } elseif(is_category() || is_author() || is_search()){ ?>
<meta property="og:type" content="object">
<?php } elseif(is_single()) { ?>
<meta property="og:type" content="article">
<?php } ?>
<meta property="og:site_name" content="Camelway Machinery">
<meta property="og:title" content="<?php dm_title();?>">
<meta property="og:description" content="<?php dm_description(160);?>">
<meta property="og:url" content="<?php dm_url();?>">
<meta property="article:publisher" content="https://www.facebook.com/camelway/">
<?php if(is_single()){ ?>
<?php
$tags = get_the_tags();
foreach($tags as $tag){
?>
<meta property="article:tag" content="<?php echo $tag->name?>">
<?php }         
    if(in_category(array(1,2,3,4,5,6,7,10))) {
?>
<meta property="article:section" content="Products">
<?php } ?>
<meta property="article:published_time" content="<?php the_time('Y-m-d H:i:s');?>">
<meta property="article:modified_time" content="<?php the_modified_time('Y-m-d H:i:s');?>">
<?php } ?>
<?php 
   $ogimage = og_image(); 
   if(!empty($ogimage)){
?>
<meta property="og:image" content="<?php echo $ogimage[0]?>">
<meta property="og:image:width" content="<?php echo $ogimage[1];?>">
<meta property="og:image:height" content="<?php echo $ogimage[2];?>">
<?php } ?>
<?php if(is_home()){ ?>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "LocalBusiness",
  "address": {
    "@type": "PostalAddress",
    "addressCountry": "UZ",
    "addressLocality": "Ташкент",
    "addressRegion": "Зангиатинский район ",
    "streetAddress": "УзгаришҚФЕ ,ул.Дилхуш 1"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "41.245888",
    "longitude": "69.217518"
  },
  "description": "ООО «CAMELWAY »  находится в Ташкенте и специализируется на предоставлении высококачественных строительных машин и оборудования для пользователей в Узбекистане, добро пожаловать на консультацию!",
  "name": "ИП ООО «CAMELWAY CHINA»",
  "image": "https://data.camelway.net/static/images/camelway-114x114.png",
  "email": "sales@camelway.uz",
  "telephone": "(+99890) 9181666, (+99890) 0085888, (+99890) 8053999",
  "openingHours": "Mo, Tu, We, Th, Fr, Sa, Su 07:00 - 19:00",
  "priceRange": "$300 - $1000000"
}
</script>
<?php } ?>
<script>
    var supportwebp = (function supportwebp(){var elem = document.createElement('canvas');if (!!(elem.getContext && elem.getContext('2d'))) {return elem.toDataURL('image/webp').indexOf('data:image/webp') == 0;}return false;})();
    var templateurl = "<?php dminfo('template_url')?>";
    if(!String.prototype.trim){
      String.prototype.trim = function(){
        return this.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, '');
      };
    }
    function getCookie(name){
        if(document.cookie.length == 0 )
            return false;
        var start = document.cookie.indexOf(name+"=");
        if(start == -1)
            return false;
        var last = document.cookie.substr(start + name.length +1 );
        var end = last.indexOf(';');
        return unescape(last.substr(0, end));
    }
    function setCookie(name, value, expires){
        var cdate = new Date();
        cdate.setTime(cdate.getTime() + expires*1000);
        if(window.location.hostname.match(/[^.\s]*\.[a-zA-Z]{2,5}$/)){
            var domain = window.location.hostname.match(/[^.\s]*\.[a-zA-Z]{2,5}$/)[0];
        }else{
            var domain = window.location.hostname;
        }
        document.cookie = name+"="+escape(value)+";expires="+cdate.toUTCString()+";domain="+domain+";path=/";
    }
    if(getCookie('camelwayuzinitpage') == false){
        setCookie('camelwayuzinitpage', window.location.href, 604800);
    }
    function get_landing_page(){
       return getCookie('camelwayuzinitpage') || window.location.href;
    }
    function ajax_submit(obj){
        var user_name = obj.user_name.value.trim();
        var user_mobile = obj.user_mobile.value.trim();
        var content = obj.content.innnerText || obj.content.value;
        if(content !=''){
            content += "\n\nLanding Page: "+get_landing_page();
        }
        var ajaxurl = obj.action+"?format=json";
        var data = "user_name="+encodeURIComponent(user_name)+"&user_mobile="+encodeURIComponent(user_mobile)+"&content="+encodeURIComponent(content);
        var xhr = new XMLHttpRequest();
        xhr.open("POST",ajaxurl,true);
        xhr.send(data);
        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4 && xhr.status == 200){
                var data = JSON.parse(xhr.responseText);
                if(data.error_code == 200){
                   gtag('event', 'conversion', {'send_to': 'AW-663867645/ER-nCJPG9cUBEP2hx7wC'});
                   fbq('track', 'Lead');
                }
               alert(data.error_message);
            }
        }
        return false;
    }
</script>
<script async src="<?php dminfo('template_url');?>chatonline.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-75819314-8"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-75819314-8');
    gtag('config', 'AW-663867645');

    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '473483456591431');
    fbq('track', 'PageView');

    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    ym(56097448, "init", {
        clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
    });
</script>
</head>
<body>
<div class="container top">
    <div class="s-logo">
        <img src="<?php dminfo('template_url')?>images/logo.png" alt="ИП ООО «CAMELWAY CHINA»">
    </div>
    <div class="introduce">
        <p>Camelway работаем на рынке бетонных заводов более 30 лет с 1983. <a href="<?php the_permalink(1);?>">More &gt;&gt;</a></p>
    </div>
</div>
<div class="container head">
    <a href="<?php dminfo('home');?>" class="logo"><img src="<?php dminfo('template_url')?>images/logo.png" alt="Camelway"></a>
    <div class="top-contact">
        <p class="mobile"> (+99890) 0085888, (+99890) 8053999</p>
        <p class="email">sales.uz@camelway.com, sales@camelway.uz</p>
    </div>
</div>
<div class="container menu">
    <ul>
        <li><a href="<?php dminfo('home')?>">Главная </a></li>
        <li><a href="<?php the_permalink(1);?>">О нас </a></li>
        <li><a href="<?php the_permalink(2);?>">Свяжитесь с нами </a></li>
        <li><a href="<?php the_category_link(9);?>">Новости </a></li>
        <li><a href="<?php the_category_link(8);?>">галерея </a></li>
        <li class="right"><a href="<?php the_permalink(1);?>">продукты</a>
            <i class="indicator"></i>
            <ul>
                <div class="productlist">
                <dl>
                    <dt><a href="<?php the_category_link(1)?>"><?php the_category_name(1)?></a></dt>
<?php
$m = new DM_Query('cat=1&posts_per_page=8&no_found_rows=1');
while($m->have_posts()){
    $m->the_post();
?>
                    <dd><a href="<?php the_permalink()?>" title="<?php the_subtitle()?>"><?php the_subtitle();?></a></dd>
<?php } dm_reset_postdata(); ?>
                    <dt><a href="<?php the_category_link(2)?>"><?php the_category_name(2)?></a></dt>
<?php
$m = new DM_Query('cat=2&posts_per_page=8&no_found_rows=1');
while($m->have_posts()){
    $m->the_post();
?>
                    <dd><a href="<?php the_permalink()?>" title="<?php the_subtitle()?>"><?php the_subtitle();?></a></dd>
<?php } dm_reset_postdata(); ?>
                    <dt><a href="<?php the_category_link(4)?>"><?php the_category_name(4);?></a></dt>
<?php
$m = new DM_Query('cat=4&posts_per_page=8&no_found_rows=1');
while($m->have_posts()){
    $m->the_post();
?>
                    <dd><a href="<?php the_permalink()?>" title="<?php the_subtitle()?>"><?php the_subtitle();?></a></dd>
<?php } dm_reset_postdata(); ?>
                    <dt><a href="<?php the_category_link(5)?>"><?php the_category_name(5)?></a></dt>
<?php
$m = new DM_Query('cat=5&posts_per_page=8&no_found_rows=1');
while($m->have_posts()){
    $m->the_post();
?>
                    <dd><a href="<?php the_permalink()?>" title="<?php the_subtitle()?>"><?php the_subtitle();?></a></dd>
<?php } dm_reset_postdata(); ?>
                    <dt><a href="<?php the_category_link(6)?>"><?php the_category_name(6)?></a></dt>
<?php
$m = new DM_Query('cat=6&posts_per_page=8&no_found_rows=1');
while($m->have_posts()){
    $m->the_post();
?>
                    <dd><a href="<?php the_permalink()?>" title="<?php the_subtitle()?>"><?php the_subtitle();?></a></dd>
<?php } dm_reset_postdata(); ?>
                    <dt><a href="<?php the_category_link(3)?>"><?php the_category_name(3)?></a></dt>
<?php
$m = new DM_Query('cat=3&posts_per_page=8&no_found_rows=1');
while($m->have_posts()){
    $m->the_post();
?>
                    <dd><a href="<?php the_permalink()?>" title="<?php the_subtitle()?>"><?php the_subtitle();?></a></dd>
<?php } dm_reset_postdata(); ?>
                    <dt><a href="<?php the_category_link(7)?>"><?php the_category_name(7)?></a></dt>
<?php
$m = new DM_Query('cat=7&posts_per_page=8&no_found_rows=1');
while($m->have_posts()){
    $m->the_post();
?>
                    <dd><a href="<?php the_permalink()?>" title="<?php the_subtitle()?>"><?php the_subtitle();?></a></dd>
<?php } dm_reset_postdata(); ?>
                </dl>
                </div>
                <div class="search">
                    <form action="<?php dminfo('home')?>index.php" method="get">
                        <input type="text" name="s" value="">
                        <input type="submit" value="">
                    </form>
                </div>
            </ul>
        </li>
    </ul>
</div>

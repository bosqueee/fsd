<?php
// Tentukan path ke file JSON
$jsonFile = 'data.json';

// Baca isi file JSON
$jsonData = file_get_contents($jsonFile);

// Mengurai JSON menjadi array PHP
$blogPosts = json_decode($jsonData, true);

// Ambil URL yang diminta dari parameter GET
$url = isset($_GET['url']) ? $_GET['url'] : '';

// Cari postingan yang sesuai dengan URL yang diminta
$requestedPost = null;
foreach ($blogPosts as $post) {
    if ($post['link'] === 'news/' . $url) {
        $requestedPost = $post;
        break;
    }
}

// Jika postingan ditemukan, simpan data dalam variabel terpisah
if ($requestedPost) {
    $imageUrl = $requestedPost['imageUrl'];
    $title = $requestedPost['title'];
    $date = $requestedPost['date'];
    $content = $requestedPost['content'];
?>
   
   











<!DOCTYPE html>
<html lang="id" dir="ltr" prefix="content: http://purl.org/rss/1.0/modules/content/  dc: http://purl.org/dc/terms/  foaf: http://xmlns.com/foaf/0.1/  og: http://ogp.me/ns#  rdfs: http://www.w3.org/2000/01/rdf-schema#  schema: http://schema.org/  sioc: http://rdfs.org/sioc/ns#  sioct: http://rdfs.org/sioc/types#  skos: http://www.w3.org/2004/02/skos/core#  xsd: http://www.w3.org/2001/XMLSchema# ">
  <head>
    <meta charset="utf-8" />

<meta name="description" content="TORGASLAB adalah organisasi masyarakat madani berbadan hukum Indonesia yang bergerak di bidang konservasi alam dan pembangunan berkelanjutan, dengan dukungan lebih dari 100.000 suporter. Misi Yayasan WWF Indonesia adalah untuk menghentikan penurunan kualitas lingkungan hidup dan membangun masa depan di mana manusia hidup selaras dengan alam, melalui pelestarian keanekaragaman hayati dunia, pemanfaatan sumber daya alam terbarukan yang berkelanjutan, serta dukungan pengurangan polusi dan konsumsi berlebihan." />
<meta name="keywords" content="TORGASLAB, apa itu wwf indonesia, wwf indonesia" />
<link rel="canonical" href="id" />
<link rel="shortlink" href="id" />
<meta name="MobileOptimized" content="width" />
<meta name="HandheldFriendly" content="true" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="icon" href="sites/default/files/logo.jpg" type="image/jpg" />
<link rel="alternate" hreflang="en" href="en" />
<link rel="alternate" hreflang="id" href="id" />

<title>TORGASLAB - <?php echo $title; ?></title>
<?php
// Mendapatkan path ke direktori saat ini
$currentDir = dirname(__FILE__);
?>
<?php
include $currentDir . '/../header.php';
include $currentDir . '/../menu.php';
?>
   </div>
</nav>
<!-- END OUTPUT from 'themes/martis/templates/block/block--system-menu-block--shop.html.twig' -->


  </div>

<!-- END OUTPUT from 'themes/martis/templates/region/region.html.twig' -->


				</div>
					
			</div>
		</div>
		</div>
			</div>
</header>
<!-- Header End -->	
		
			
		<section id="page-wrapper" class="page-wrapper">
		<div class="container">
			<div class="row content-layout">
			  
			  			  <!--- Start Content -->
				<div class="col-md-12 main-content">
					

<!-- THEME DEBUG -->
<!-- THEME HOOK: 'region' -->
<!-- FILE NAME SUGGESTIONS:
   * region--content.html.twig
   x region.html.twig
-->
<!-- BEGIN OUTPUT from 'themes/martis/templates/region/region.html.twig' -->
  <div class="region region-content">
    

<!-- THEME DEBUG -->
<!-- THEME HOOK: 'block' -->
<!-- FILE NAME SUGGESTIONS:
   * block--martis-messages.html.twig
   x block--system-messages-block.html.twig
   * block--system.html.twig
   * block.html.twig
-->
<!-- BEGIN OUTPUT from 'core/modules/system/templates/block--system-messages-block.html.twig' -->
<div data-drupal-messages-fallback class="hidden"></div>

<!-- END OUTPUT from 'core/modules/system/templates/block--system-messages-block.html.twig' -->



<!-- THEME DEBUG -->
<!-- THEME HOOK: 'block' -->
<!-- FILE NAME SUGGESTIONS:
   * block--martis-content.html.twig
   * block--system-main-block.html.twig
   * block--system.html.twig
   x block.html.twig
-->
<!-- BEGIN OUTPUT from 'themes/martis/templates/block/block.html.twig' -->

<div id="block-martis-content--3" class="norm-width block-title-1 block-title-left block block-system block-system-main-block" >
<div class="container-wrap clearfix">
  
    
        <div class="block-content clearfix">

<!-- THEME DEBUG -->
<!-- THEME HOOK: 'node' -->
<!-- FILE NAME SUGGESTIONS:
   * node--1046--full.html.twig
   * node--1046.html.twig
   * node--blog--full.html.twig
   x node--blog.html.twig
   * node--full.html.twig
   * node.html.twig
-->
<!-- BEGIN OUTPUT from 'themes/martis/templates/node/node--blog.html.twig' -->

	<div data-history-node-id="1046" role="article" about="<?php echo $link; ?>" class="node node-type-blog node-content post-wrapper blog-post-full">
	  
	  
		<div class="post-media">
									<div class="post-image">

<!-- THEME DEBUG -->
<!-- THEME HOOK: 'image_formatter' -->
<!-- BEGIN OUTPUT from 'core/modules/image/templates/image-formatter.html.twig' -->
  

<!-- THEME DEBUG -->
<!-- THEME HOOK: 'image' -->
<!-- BEGIN OUTPUT from 'core/modules/system/templates/image.html.twig' -->
<img loading="lazy" src="<?php echo $imageUrl; ?>" width="570" height="609" alt="<?php echo $title; ?>"  typeof="foaf:Image" />

<!-- END OUTPUT from 'core/modules/system/templates/image.html.twig' -->



<!-- END OUTPUT from 'core/modules/image/templates/image-formatter.html.twig' -->

</div>
				<div class="credit-image">-</div>
							</div>
		<div class="post-content">
				<h3 class="post-title">

<!-- THEME DEBUG -->
<!-- THEME HOOK: 'field' -->
<!-- FILE NAME SUGGESTIONS:
   * field--node--title--full.html.twig
   * field--node--title--blog.html.twig
   x field--node--title.html.twig
   * field--node--blog.html.twig
   * field--title.html.twig
   * field--string.html.twig
   * field.html.twig
-->
<!-- BEGIN OUTPUT from 'core/modules/node/templates/field--node--title.html.twig' -->

<span><?php echo $title; ?></span>

<!-- END OUTPUT from 'core/modules/node/templates/field--node--title.html.twig' -->

</h3>
								<div class="post-meta">
				<div class="post-meta-item post-date"><i class="ti-time"></i> <?php echo $date; ?></div>
				<div class="post-meta-item"><i class="ti-user"></i> by 

<!-- THEME DEBUG -->
<!-- THEME HOOK: 'field' -->
<!-- FILE NAME SUGGESTIONS:
   * field--node--field-penulis--full.html.twig
   * field--node--field-penulis--blog.html.twig
   * field--node--field-penulis.html.twig
   * field--node--blog.html.twig
   * field--field-penulis.html.twig
   * field--string.html.twig
   x field.html.twig
-->
<!-- BEGIN OUTPUT from 'themes/martis/templates/field/field.html.twig' -->

            <div class="field field-field-penulis field-type-string field-label-hidden field-item">Admin</div>
      
<!-- END OUTPUT from 'themes/martis/templates/field/field.html.twig' -->

</div>
				</div>
								<div class="post-body">

<!-- THEME DEBUG -->
<!-- THEME HOOK: 'field' -->
<!-- FILE NAME SUGGESTIONS:
   * field--node--body--full.html.twig
   * field--node--body--blog.html.twig
   * field--node--body.html.twig
   * field--node--blog.html.twig
   * field--body.html.twig
   * field--text-with-summary.html.twig
   x field.html.twig
-->
<!-- BEGIN OUTPUT from 'themes/martis/templates/field/field.html.twig' -->

            <div class="field field-body field-type-text-with-summary field-label-hidden field-item">
          <?php echo $content; ?></div>
      
<!-- END OUTPUT from 'themes/martis/templates/field/field.html.twig' -->

</div>
								
								                <div class="entry-document">
                        <div class="doc-file">
                        

<!-- THEME DEBUG -->
<!-- THEME HOOK: 'field' -->
<!-- FILE NAME SUGGESTIONS:
   * field--node--field-document--full.html.twig
   * field--node--field-document--blog.html.twig
   * field--node--field-document.html.twig
   * field--node--blog.html.twig
   * field--field-document.html.twig
   * field--entity-reference.html.twig
   x field.html.twig
-->
<!-- BEGIN OUTPUT from 'themes/martis/templates/field/field.html.twig' -->

            <div class="field field-field-document field-type-entity-reference field-label-hidden field-item">

</div>
      
<!-- END OUTPUT from 'themes/martis/templates/field/field.html.twig' -->


                        </div>
                </div>
                
						</div>
	</div>

<!-- END OUTPUT from 'themes/martis/templates/node/node--blog.html.twig' -->

</div>
  </div>
</div>
<!-- END OUTPUT from 'themes/martis/templates/block/block.html.twig' -->


  </div>

<!-- END OUTPUT from 'themes/martis/templates/region/region.html.twig' -->


				</div>
			  <!---End Content -->
			  
			  			</div>
		</div>
	</section>
	
		<!-- Start Content Wide Middle -->
	<section id="content-wide" class="content-wide">        
		

<!-- THEME DEBUG -->
<!-- THEME HOOK: 'region' -->
<!-- FILE NAME SUGGESTIONS:
   * region--content-wide.html.twig
   x region.html.twig
-->
<!-- BEGIN OUTPUT from 'themes/martis/templates/region/region.html.twig' -->
  <div class="region region-content-wide">
    

<!-- THEME DEBUG -->
<!-- THEME HOOK: 'block' -->
<!-- FILE NAME SUGGESTIONS:
   * block--views-block--blog-blog-related-posts.html.twig
   * block--views-block--blog-blog-related-posts.html.twig
   * block--views-block.html.twig
   * block--views.html.twig
   x block.html.twig
-->
<!-- BEGIN OUTPUT from 'themes/martis/templates/block/block.html.twig' -->

<?php
// Tentukan path ke file JSON
$jsonFile = 'data.json';

// Baca isi file JSON
$jsonData = file_get_contents($jsonFile);

// Mengurai JSON menjadi array PHP
$blogPosts = json_decode($jsonData, true);

// Ambil URL yang terakhir diakses
$lastVisitedUrldaf = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';

// Memecah referer URL menjadi bagian-bagiannya menggunakan delimiter '/'
$urlParts = explode('/', rtrim($lastVisitedUrldaf, '/'));

// Mengambil bagian terakhir dari referer URL
$lastPart = end($urlParts);

// Menggabungkan dengan string 'news/' untuk membentuk URL yang diinginkan
$lastVisitedUrl = '/news/' . $lastPart;
// Inisialisasi variabel untuk posting terkait
$relatedPosts = [];
// Jika ada URL yang terakhir diakses, cari posting yang tidak sedang diakses
if ($lastVisitedUrl !== '') {
    foreach ($blogPosts as $post) {
        // Tambahkan posting yang tidak memiliki URL yang sama dengan URL terakhir yang diakses
        if ($post['link'] !== $lastVisitedUrl) {
            $relatedPosts[] = $post;
        }
    }
}

// Ambil 4 postingan acak dari array $relatedPosts
$randomRelatedPosts = array_rand($relatedPosts, min(4, count($relatedPosts)));

?>

<!-- Tampilkan blok "Artikel Terkait" jika posting terkait ditemukan -->
<?php if (!empty($randomRelatedPosts)) : ?>
    <div class="views-element-container norm-width block-title-1 block-title-left block block-views block-views-blockblog-blog-related-posts" id="block-views-block-blog-blog-related-posts">
        <div class="container-wrap clearfix">
            <div class="block-title-wrap clearfix">
                <div class="block-title-content">
                    <h2 class="block-title">ARTIKEL TERKAIT</h2>
                </div>
            </div>
            <div class="block-content clearfix">
                <!-- Tampilkan posting terkait -->
                <div class="row grid-wrapper">
                    <?php foreach ($randomRelatedPosts as $index) :
                        // Tambahkan logika untuk memastikan posting yang sedang diakses tidak muncul di daftar artikel terkait
                        if ($relatedPosts[$index]['link'] !== $lastVisitedUrl) :
                    ?>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-3 grid-item">
                                <div data-history-node-id="<?php echo $relatedPosts[$index]['node_id']; ?>" role="article" about="<?php echo $relatedPosts[$index]['link']; ?>" class="blog-post-teaser post-row">
                                    <div class="post-thumb">
                                        <div class="post-image">
                                            <a href="<?php echo $relatedPosts[$index]['link']; ?>" hreflang="id">
                                                <img loading="lazy" src="<?php echo $relatedPosts[$index]['imageUrl']; ?>" width="282" height="188" alt="<?php echo $relatedPosts[$index]['title']; ?>" title="WWF-Indonesia" typeof="foaf:Image" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-content-wrap">
                                        <div class="content-wrap">
                                            <div class="post-meta">
                                                <div class="post-meta-item post-date"><i class="ti-time"></i> <?php echo $relatedPosts[$index]['date']; ?></div>
                                            </div>
                                            <div class="post-content">
                                                <div class="post-title-wrap"><h5 class="post-title"><a href="<?php echo $relatedPosts[$index]['link']; ?>"><?php echo $relatedPosts[$index]['title']; ?></a></h5></div>
                                                <div class="post-link"><a href="<?php echo $relatedPosts[$index]['link']; ?>">Read More »</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endif;
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>



<!-- END OUTPUT from 'themes/martis/templates/block/block.html.twig' -->


  </div>

<!-- END OUTPUT from 'themes/martis/templates/region/region.html.twig' -->


	</section>
	<!-- End Content Wide Middle -->
		

		  <!-- start Content Widget -->
	  <section class="content-widget">
		<div class="container">
			<div class="row">
						<!-- Start Content Widget First Region -->
			<div class="col-md-12 content-widget-section">
				

<!-- THEME DEBUG -->
<!-- THEME HOOK: 'region' -->
<!-- FILE NAME SUGGESTIONS:
   * region--content-widget-first.html.twig
   x region.html.twig
-->
<!-- BEGIN OUTPUT from 'themes/martis/templates/region/region.html.twig' -->
  <div class="region region-content-widget-first">
    

<!-- THEME DEBUG -->
<!-- THEME HOOK: 'block' -->
<!-- FILE NAME SUGGESTIONS:
   * block--bettersocialsharingbuttons.html.twig
   * block--social-sharing-buttons-block.html.twig
   * block--better-social-sharing-buttons.html.twig
   x block.html.twig
-->
<!-- BEGIN OUTPUT from 'themes/martis/templates/block/block.html.twig' -->


<!-- END OUTPUT from 'themes/martis/templates/block/block.html.twig' -->


  </div>

<!-- END OUTPUT from 'themes/martis/templates/region/region.html.twig' -->


			</div>
			<!-- End Content Widget First Region -->
			
			
					
			</div>
		</div>
	  </section>
	  <!--End Content Widget -->
		
		<?php
include $currentDir . '/../footer.php';
?>

















<?php
} else {
    // Jika postingan tidak ditemukan, tampilkan pesan error atau redirect ke halaman 404
    // contoh: header("HTTP/1.0 404 Not Found");
?>
    <p>Postingan tidak ditemukan</p>
<?php
}
?>

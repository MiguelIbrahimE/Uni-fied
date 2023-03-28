<?php
require '../vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;


$firestore = new FirestoreClient();

// Get all documents under the Touristic_sites_On_Site collection
$sitesRef = $firestore->collection('Touristic_sites_On_Site');
$sitesQuery = $sitesRef->documents();

?>

<!-- Iterate over the documents and generate card layouts -->
<?php foreach ($sitesQuery as $siteDoc) { ?>
  <?php $siteData = $siteDoc->data(); ?>
  <div class="card">
    <div class="card__image-holder">
      <img class="card__image" src="../Heritage/<?php echo $siteData['SiteName']; ?>.jpg" />
    </div>
    <div class="card-title">
      <h2>
        <a href="./<?php echo $siteData['SiteName']; ?>.html" target="_blank"><?php echo $siteData['SiteName']; ?>
      </h2>
    </div>
</div>
<?php }
?>

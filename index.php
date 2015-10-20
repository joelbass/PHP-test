<?php
$pageTitle = 'Home';
?>

<?php include 'header.php'; ?>
<!-- Our site's hero area -->
<div class="hero">
  <div class="row clearfix">
    <!-- If the user name is not set, display a login link -->
    <?php if(empty($userName)) : ?>
      <h1>Who are you? Login <a href="login.php">here</a></h1>

    <!-- If there is a user, display their name and a nice message -->
    <?php else : ?>
      <h1>Hello <?php echo $userName; ?>, nice to see you again.</h1>
    <?php endif; ?>

  </div>
</div>


  <div class="row clearfix">
    <div class="column one-half">
      <h3>Column One</h3>
        <p>
          Beyond the Indian hamlet, upon a forlorn strand, I happened on a trail of recent footprints. Through rotting kelp, sea cocoa-nuts & bamboo, the tracks led me to their maker, a white man, his trowzers & Pea-jacket rolled up, sporting a kempt beard & an outsized Beaver, shovelling & sifting the cindery sand with a tea-spoon so intently that he noticed me only after I had hailed him from ten yards away. Thus it was, I made the acquaintance of Dr Henry Goose, surgeon to the London nobility. His nationality was no surprise. If there be any eyrie so desolate, or isle so remote that one may there resort unchallenged by an Englishman, 'tis not down on any map I ever saw.</p>
        </div>

    <div class="column one-half">
      <h3>Column Two</h3>
        <p>
        Had the doctor misplaced anything on that dismal shore? Could I render assistance? Dr Goose shook his head, knotted loose his 'kerchief & displayed its contents with clear pride. 'Teeth, sir, are the enamelled grails of the quest in hand. In days gone by this Arcadian strand was a cannibals' banqueting hall, yes, where the strong engorged themselves on the weak. The teeth, they spat out, as you or I would expel cherry stones. But these base molars, sir, shall be transmuted to gold & how? An artisan of Piccadilly who fashions denture-sets for the nobility pays handsomely for human gnashers. Do you know the price a quarter pound will earn, sir?'</p>
        <p>I confessed I did not.</p>

        <div class="button">
    <a href="https://www.facebook.com/crunchygods">Friend us on <span>Facebook!</span></a>
  </div>
      </div>


</div>

<?php include 'footer.php'; ?>

<?php 
/**
 * Author
 *
 * Display the Nickname and bio of the post author.
 * If a link is set in the 'website' admin field that is pulled in too
 */

$name = get_the_author_meta( 'nickname' );

$avatar = 'http//:unsplash.it/96/96';
if (!empty( get_avatar_url( get_the_author_meta( 'ID' ) ) ) ){
    $avatar = get_avatar_url( get_the_author_meta( 'ID' ) );
}

$website = '#';
if( !empty( get_the_author_meta( 'user_url' ) ) ){
    $website = get_the_author_meta( 'user_url' );
}

$email = antispambot( get_the_author_meta( 'user_email' ) );

$bio = get_the_author_meta('description');
?>

<a rel="author" href="<?php echo $website; ?>">
    <img src="<?php echo $avatar; ?>">
</a>

<h1><?php echo $name; ?></h1>

<?php if($bio): ?>
    <div><?php echo $bio; ?></div>
<?php endif; ?>

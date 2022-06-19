<?php include 'Backend Modules/Profile.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!--Style Sheet for bootstrap-4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--Style Sheet for homepage font awsome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!--Style Sheet for homepage except image hover effect-->

    <!--Style Sheet for homepage font family-->
    <link href="https://fonts.googleapis.com/css?family=Abel|Barlow+Semi+Condensed&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/menu.css">
    <title><?php echo "$N"; ?> - BCB Social Network</title>
  </head>
  <body>
    <?php include 'modules/user-menu.php';?>
    <div class="container">
    <div class="row sign-in p-2 m-3" style="background: linear-gradient(135deg, #e079fc 0%, #7c44ff 100%);color: white;border-radius:10px 10px 0 0;">
      <div class="col-lg-12 col-md-12 col-sm-12 text-center">
        <h2>Terms and Conditions</h2>
      </div>
    </div>
    <div class="container mt-3"  style="text-align:justify">
      <ul>
        <li>
          Our Terms and Policies. You must use our Services according to our Terms and posted policies. If we disable your account for a violation of our Terms, you will not create another account without our permission.</li>
        <li>
          Legal and Acceptable Use. You must access and use our Services only for legal, authorized, and acceptable purposes. You will not use (or assist others in using) our Services in ways that:<ul>
            <li>(a) violate, misappropriate, or infringe the rights of BCB Social Network, our users, or others, including privacy, publicity, intellectual property, or other proprietary rights;</li>
            <li> (b) are illegal, obscene, defamatory, threatening, intimidating, harassing, hateful, racially, or ethnically offensive, or instigate or encourage conduct that would be illegal, or otherwise inappropriate, including promoting violent
              crimes</li>
            <li>(c) involve publishing falsehoods, misrepresentations, or misleading statements; </li>
            <li>(d) impersonate someone; </li>
            <li> (e) involve sending illegal or impermissible communications such as bulk messaging, auto-messaging, auto-dialing, and the like; or</li>
            <li>(f) involve any non-personal use of our Services unless otherwise authorized by us.</li>
          </ul>
        </li>
        <li>Harm to BCB Social Network or Our Users. You must not (or assist others to) access, use, copy, adapt, modify, prepare derivative works based upon, distribute, license, sublicense, transfer, display, perform, or otherwise exploit our
          Services in impermissible or unauthorized manners, or in ways that burden, impair, or harm us, our Services, systems, our users, or others, including that you must not directly or through automated means:<ul>
            <li>(a) reverse engineer, alter, modify, create derivative works from, decompile, or extract code from our Services;</li>
            <li>(b) send, store, or transmit viruses or other harmful computer code through or onto our Services; </li>
            <li>(c) gain or attempt to gain unauthorized access to our Services or systems; </li>
            <li>(d) interfere with or disrupt the integrity or performance of our Services;</li>
            <li>(e) create accounts for our Services through unauthorized or automated means; </li>
            <li>(f) collect the information of or about our users in any impermissible or unauthorized manner; or </li>
            <li>(g) distribute or make our Services available over a network where they could be used by multiple devices at the same time.
            </li>
          </ul>
        </li>
        <li>Keeping Your Account Secure. You are responsible for keeping your device and your BCB Social Network accounts safe and secure, and you must notify us promptly of any unauthorized use or security breach of your account or our Services.
        </li>
      </ul>
    </div>
    </div>
  </body>
</html>

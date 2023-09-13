<!DOCTYPE html>

<html>
  <?php $this->getThemeElement('page/html/head', $__forward) ?>
  <?php $this->getBodyBefore(); ?>
  <body class="d-flex flex-column h-100">
    <!-- Panggil view component navbar -->
    <?php $this->getThemeElement('page/html/navbar', $__forward) ?>

    <?php $this->getThemeContent() ?>

    <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
    <?php $this->getThemeElement('page/html/footer', $__forward) ?>

    <?php $this->getJsFooter(); ?>

    <!-- Load and execute javascript code used only in this page -->
    <script>
      $(document).ready(function(e){
        <?php $this->getJsReady(); ?>
      });
      <?php $this->getJsContent(); ?>
    </script>
  </body>
</html>
  <footer class="site-footer" role="contentinfo">

      <small><?php
        // Parse Kirbytext to support dynamic year,
        // but remove all HTML like paragraph tags:
        echo html::decode($site->copyright()->kirbytext())
      ?></small>

    </div>
  </footer>

  <script src="/assets/scripts/dist/index.js" async></script>

</body>
</html>
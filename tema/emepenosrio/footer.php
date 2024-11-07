    <!-- Footer -->
<footer class="bg-dark text-light p-4 text-center">
        <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 link-duck">
                <a href="https://mx.duck-hack.cloud">&copy;<span id="current-year"></span> - Designed by Duck-Hack</a>
              </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    <!-- Bootstrap y Scripts personalizados -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      document.getElementById("current-year").textContent = new Date().getFullYear();
    </script>
    <!-- JavaScript para controlar el sidebar -->
    <script>
        function openSidebar() {
            document.getElementById("mySidebar").classList.add("active");
        }

        function closeSidebar() {
            document.getElementById("mySidebar").classList.remove("active");
        }
    </script>
  </body>
</html>
<?php
$title = "Login";
require_once views_path("partials/header");
echo '<script src="../public/assets/js/bootstrap/bootstrap.bundle.min.js"></script>';
echo '<script src="../public/assets/js/sweetalert2/sweetalert2.all.min.js"></script>';
?>

<div class="min-h-screen flex items-center justify-center bg-gray-50 px-4">
  <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
    <div class="flex flex-col items-center mb-6">
      <!-- User icon -->
      <i class="bi bi-person-circle" style="color: green; font-size: 2.9rem;"></i>
      <!-- System name and subtitle -->
      <div class="text-center mt-3">
        <span class="text-xl font-semibold">Migrants Venture</span>
        <p>HRM & Payroll Management System</p>
      </div>
    </div>

    <form id="managerLoginForm" action="" method="post" data-aos="fade-up" data-aos-delay="60" style="display: <?= $loginType === 'manager' ? 'block' : 'none' ?>;">
      <input type="hidden" name="login_type" value="manager">

      <!-- Email input -->
      <div class="mb-4">
        <label class="block mb-1 text-sm font-bold text-[#403E43]" data-aos="fade-up">Email</label>
        <div class="relative mb-3" data-aos="fade-up" data-aos-delay="50">
          <input
            type="email"
            class="form-control form-control-lg ps-5 text-sm bg-[#eaf5ea] placeholder:text-sm text-[#403E43] focus:bg-[#eaf5ea] focus:border-green-500 focus:ring-1 focus:ring-green-200 focus:outline-none focus:outline-2 focus:outline-green-500 focus:outline-offset-2 w-full rounded"
            name="email"
            placeholder="Enter admin email"
            value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>"
            required
          >
          <i
            class="bi bi-envelope position-absolute top-1/2 left-3 transform -translate-y-1/2"
            style="color: #396A39; font-size: 1.4rem;"
            data-aos="fade-up"
            data-aos-delay="70"
          ></i>
        </div>
      </div>

      <!-- Password input -->
      <div class="mb-4">
        <label class="block mb-1 text-sm font-bold text-[#403E43]" data-aos="fade-up">Password</label>
        <div class="relative" data-aos="fade-up" data-aos-delay="50">
          <input
            type="password"
            class="form-control form-control-lg ps-5 text-sm bg-[#eaf5ea] placeholder:text-sm text-[#403E43] focus:bg-[#eaf5ea] focus:border-green-500 focus:ring-1 focus:ring-green-200 focus:outline-none focus:outline-2 focus:outline-green-500 focus:outline-offset-2 w-full rounded"
            name="password"
            id="managerPassword"
            placeholder="Enter your password"
            required
          >
          <!-- Lock icon on left - no toggle here -->
          <span
            class="absolute top-1/2 left-3 transform -translate-y-1/2"
            data-aos="fade-up"
            data-aos-delay="70"
          >
            <i class="bi bi-lock" style="font-size: 1.4rem; color: #396A39;"></i>
          </span>
          <!-- Eye toggle icon on right -->
          <span
            class="absolute top-1/2 right-3 transform -translate-y-1/2 cursor-pointer"
            onclick="togglePassword(event, 'managerPassword')"
            data-aos="fade-up"
            data-aos-delay="90"
          >
            <i class="bi bi-eye-slash" style="font-size: 1.2rem; color: #396A39;"></i>
          </span>
        </div>
      </div>

      <!-- Submit button -->
      <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 rounded focus:outline-none focus:ring-2 focus:ring-green-400">
        Login
      </button>
    </form>
  </div>
</div>

<script>
  function togglePassword(event, fieldId) {
    const passwordField = document.getElementById(fieldId);
    const icon = event.currentTarget.querySelector('i');

    if (passwordField.type === 'password') {
      passwordField.type = 'text';
      icon.classList.remove('bi-eye-slash');
      icon.classList.add('bi-eye');
    } else {
      passwordField.type = 'password';
      icon.classList.remove('bi-eye');
      icon.classList.add('bi-eye-slash');
    }
  }
</script>

<?php
require_once views_path("partials/footer");
?>

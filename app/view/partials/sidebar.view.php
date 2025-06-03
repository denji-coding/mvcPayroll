<?php
$currentPage = $_GET['payroll'] ?? basename($_SERVER['PHP_SELF']);
require_once views_path("partials/header");
?>

<div id="adminSidebar" class="w-40" style="background-color: #0b5125; color: white; min-height: 100vh; padding: 1.5rem;">
    <img src="../public/assets/image/logo.png" alt="Company Logo" class="mx-auto w-24 h-24 mb-3 rounded-full border border-[#fff8] bg-white shadow" >
    <span class="block text-center font-extrabold text-white text-xl md:text-lg mb-2">Migrants Venture Corporation</span>
    <div class="border-b border-white-500 mb-4"></div>
    <!-- <hr class="border-white-900 mb-4"> -->
    <div class="flex flex-col">
        <a href="index.php?payroll=dashboard1"
           class="w-full flex items-center font-semibold text-white text-sm leading-relaxed gap-1 p-2 px-4 rounded <?= ($currentPage == 'dashboard1') ? 'bg-[#206037] border-l-4 border-white' : 'hover:bg-[#206037] hover:border-l-4 hover:border-white' ?>">
            <i class="bi bi-house-door"></i> Dashboard
        </a>
        <a href="index.php?payroll=employees"
           class="w-full flex items-center font-semibold text-white text-sm leading-relaxed gap-1 p-2 px-4 rounded <?= ($currentPage == 'employees') ? 'bg-[#206037] border-l-4 border-white' : 'hover:bg-[#206037] hover:border-l-4 hover:border-white' ?>">
            <i class="bi bi-people"></i> Employees
        </a>
        <a href="index.php?payroll=schedules"
           class="w-full flex items-center font-semibold text-white text-sm leading-relaxed gap-1 p-2 px-4 rounded <?= ($currentPage == 'schedules') ? 'bg-[#206037] border-l-4 border-white' : 'hover:bg-[#206037] hover:border-l-4 hover:border-white' ?>">
            <i class="bi bi-clock"></i> Schedules
        </a>
        <a href="index.php?payroll=leave_history"
            class="w-full flex items-center font-semibold text-white text-sm leading-relaxed gap-1 p-2 px-4 rounded <?= ($currentPage == 'leave_history') ? 'bg-[#206037] border-l-4 border-white' : 'hover:bg-[#206037] hover:border-l-4 hover:border-white' ?>">
            <i class="bi bi-calendar-check"></i> Leave History
        </a>

        <a href="index.php?payroll=timerecords"
           class="w-full flex items-center font-semibold text-white text-sm leading-relaxed gap-1 p-2 px-4 rounded <?= ($currentPage == 'timerecords') ? 'bg-[#206037] border-l-4 border-white' : 'hover:bg-[#206037] hover:border-l-4 hover:border-white' ?>">
            <i class="bi bi-calendar2-week"></i> Time Records
        </a>
        <!-- <a href="index.php?payroll=payroll"
           class="w-full flex items-center font-semibold text-white text-sm leading-relaxed gap-1 p-2 px-4 rounded <?= ($currentPage == 'payroll') ? 'bg-[#206037] border-l-4 border-white' : 'hover:bg-[#206037] hover:border-l-4 hover:border-white' ?>">
            <i class="bi bi-credit-card"></i> Payroll
        </a> -->
        <a href="index.php?payroll=payslips"
           class="w-full flex items-center font-semibold text-white text-sm leading-relaxed gap-1 p-2 px-4 rounded <?= ($currentPage == 'payslips') ? 'bg-[#206037] border-l-4 border-white' : 'hover:bg-[#206037] hover:border-l-4 hover:border-white' ?>">
            <i class="bi bi-file-earmark-text"></i> Payslips
        </a>
        <a href="index.php?payroll=reports"
           class="w-full flex items-center font-semibold text-white text-sm leading-relaxed gap-1 p-2 px-4 rounded <?= ($currentPage == 'reports') ? 'bg-[#206037] border-l-4 border-white' : 'hover:bg-[#206037] hover:border-l-4 hover:border-white' ?>">
            <i class="fas fa-chart-column"></i> Reports

        </a>
    </div>
</div>



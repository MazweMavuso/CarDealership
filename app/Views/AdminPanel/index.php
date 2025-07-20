<!DOCTYPE html>
<html lang="en">
<head>
    <base target="_self">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Dealership Admin Portal - Login</title>
    <meta name="description" content="Admin portal login for managing car inventory">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#2563eb",
                        secondary: "#1e40af",
                        accent: "#1e3a8a"
                    }
                }
            }
        }
    </script>
    <style>
        .auth-container {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1489824904134-891ab64532f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1489&q=80');
            background-size: cover;
            background-position: center;
        }
        .form-container {
            backdrop-filter: blur(8px);
            background-color: rgba(255, 255, 255, 0.85);
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen">
    <!-- Auth Container -->
    <div class="auth-container min-h-screen flex items-center justify-center p-4">
        <!-- Login Form -->
        <div id="loginFormContainer" class="form-container w-full max-w-md rounded-xl shadow-2xl overflow-hidden">
            <div class="p-8">
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-bold text-primary mb-2">CarDealer Admin</h1>
                    <p class="text-gray-600">Sign in to your admin account</p>
                </div>
                
                <form id="loginForm" class="space-y-6">
                    <div>
                        <label for="loginEmail" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <input type="email" id="loginEmail" required 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition"
                            placeholder="your@email.com">
                    </div>
                    
                    <div>
                        <label for="loginPassword" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <input type="password" id="loginPassword" required 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition"
                            placeholder="••••••••">
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="rememberMe" type="checkbox" 
                                class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                            <label for="rememberMe" class="ml-2 block text-sm text-gray-700">
                                Remember me
                            </label>
                        </div>
                        
                        <a href="#" id="forgotPassword" class="text-sm text-primary hover:text-secondary">
                            Forgot password?
                        </a>
                    </div>
                    
                    <div>
                        <button type="submit" id="loginSubmit" class="w-full bg-primary text-white py-3 px-4 rounded-lg hover:bg-secondary transition font-medium">
    Sign In
</button>

                    </div>
                    
                    <div class="text-center text-sm text-gray-600">
                        Don't have an account? 
                        <a href="#" id="showRegister" class="text-primary hover:text-secondary font-medium">
                            Register here
                        </a>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- Registration Form -->
        <div id="registerFormContainer" class="form-container w-full max-w-md rounded-xl shadow-2xl overflow-hidden hidden">
            <div class="p-8">
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-bold text-primary mb-2">Create Account</h1>
                    <p class="text-gray-600">Register for admin access</p>
                </div>
                
                <form id="registerForm" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="registerFirstName" class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                            <input type="text" id="registerFirstName" required 
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition"
                                placeholder="John">
                        </div>
                        <div>
                            <label for="registerLastName" class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                            <input type="text" id="registerLastName" required 
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition"
                                placeholder="Doe">
                        </div>
                    </div>
                    
                    <div>
                        <label for="registerEmail" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <input type="email" id="registerEmail" required 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition"
                            placeholder="your@email.com">
                    </div>
                    
                    <div>
                        <label for="registerPassword" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <input type="password" id="registerPassword" required 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition"
                            placeholder="••••••••">
                        <p class="mt-1 text-xs text-gray-500">Must be at least 8 characters</p>
                    </div>
                    
                    <div>
                        <label for="registerConfirmPassword" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                        <input type="password" id="registerConfirmPassword" required 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition"
                            placeholder="••••••••">
                    </div>
                    
                    <div>
                        <button type="submit" id="registerSubmit" class="w-full bg-primary text-white py-3 px-4 rounded-lg hover:bg-secondary transition font-medium">
    Register
</button>
                    </div>
                    
                    <div class="text-center text-sm text-gray-600">
                        Already have an account? 
                        <a href="#" id="showLogin" class="text-primary hover:text-secondary font-medium">
                            Sign in here
                        </a>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- Forgot Password Form -->
        <div id="forgotPasswordContainer" class="form-container w-full max-w-md rounded-xl shadow-2xl overflow-hidden hidden">
            <div class="p-8">
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-bold text-primary mb-2">Reset Password</h1>
                    <p class="text-gray-600">Enter your email to receive reset instructions</p>
                </div>
                
                <form id="forgotPasswordForm" class="space-y-6">
                    <div>
                        <label for="forgotEmail" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <input type="email" id="forgotEmail" required 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition"
                            placeholder="your@email.com">
                    </div>
                    
                    <div>
                        <button type="submit" 
                            class="w-full bg-primary text-white py-3 px-4 rounded-lg hover:bg-secondary transition font-medium">
                            Send Reset Link
                        </button>
                    </div>
                    
                    <div class="text-center text-sm text-gray-600">
                        Remember your password? 
                        <a href="#" id="backToLogin" class="text-primary hover:text-secondary font-medium">
                            Sign in here
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

     Success Modal 
    <div id="successModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md">
            <div class="p-6 text-center">
                <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100">
                    <svg class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h3 id="successTitle" class="text-lg leading-6 font-medium text-gray-900 mt-3"></h3>
                <div class="mt-2">
                    <p id="successMessage" class="text-sm text-gray-500"></p>
                </div>
                <div class="mt-4">
                    <button id="closeSuccessModal" type="button" class="bg-primary text-white px-4 py-2 rounded hover:bg-secondary transition">
                        Continue
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // DOM Elements
        const loginFormContainer = document.getElementById('loginFormContainer');
        const registerFormContainer = document.getElementById('registerFormContainer');
        const forgotPasswordContainer = document.getElementById('forgotPasswordContainer');
        const showRegister = document.getElementById('showRegister');
        const showLogin = document.getElementById('showLogin');
        const forgotPassword = document.getElementById('forgotPassword');
        const backToLogin = document.getElementById('backToLogin');
        const loginForm = document.getElementById('loginForm');
        const registerForm = document.getElementById('registerForm');
        const forgotPasswordForm = document.getElementById('forgotPasswordForm');
        const successModal = document.getElementById('successModal');
        const successTitle = document.getElementById('successTitle');
        const successMessage = document.getElementById('successMessage');
        const closeSuccessModal = document.getElementById('closeSuccessModal');

        // Sample user data (in a real app, this would be handled by a backend)
       
        

        // Initialize the app
        document.addEventListener('DOMContentLoaded', () => {
            setupEventListeners();
        });

        // Setup event listeners
        function setupEventListeners() {
            // Toggle between login and register forms
            showRegister.addEventListener('click', (e) => {
                e.preventDefault();
                loginFormContainer.classList.add('hidden');
                registerFormContainer.classList.remove('hidden');
                forgotPasswordContainer.classList.add('hidden');
            });

            showLogin.addEventListener('click', (e) => {
                e.preventDefault();
                registerFormContainer.classList.add('hidden');
                loginFormContainer.classList.remove('hidden');
                forgotPasswordContainer.classList.add('hidden');
            });

            forgotPassword.addEventListener('click', (e) => {
                e.preventDefault();
                loginFormContainer.classList.add('hidden');
                registerFormContainer.classList.add('hidden');
                forgotPasswordContainer.classList.remove('hidden');
            });

            backToLogin.addEventListener('click', (e) => {
                e.preventDefault();
                forgotPasswordContainer.classList.add('hidden');
                loginFormContainer.classList.remove('hidden');
            });

            // Form submissions
            loginForm.addEventListener('submit', handleLogin);
            registerForm.addEventListener('submit', handleRegister);
            forgotPasswordForm.addEventListener('submit', handleForgotPassword);
            closeSuccessModal.addEventListener('click', closeModal);
        }


function handleRegister(e) {
    e.preventDefault();

    const registerForm = document.getElementById('registerForm');
    const registerFormContainer = document.getElementById('registerFormContainer');
    const loginFormContainer = document.getElementById('loginFormContainer');
    const submitBtn = document.getElementById('registerSubmit');

    const firstName = document.getElementById('registerFirstName').value.trim();
    const lastName = document.getElementById('registerLastName').value.trim();
    const email = document.getElementById('registerEmail').value.trim();
    const password = document.getElementById('registerPassword').value.trim();
    const confirmPassword = document.getElementById('registerConfirmPassword').value.trim();

    // Disable submit button to prevent double submission
    submitBtn.disabled = true;

    // Validation
    if (!firstName || !lastName || !email || !password || !confirmPassword) {
        showError('Please fill in all fields');
        submitBtn.disabled = false;
        return;
    }

    // Email format check
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        showError('Invalid email format');
        submitBtn.disabled = false;
        return;
    }

    if (password !== confirmPassword) {
        showError('Passwords do not match');
        submitBtn.disabled = false;
        return;
    }

    if (password.length < 8) {
        showError('Password must be at least 8 characters');
        submitBtn.disabled = false;
        return;
    }

    // Send data to CI4 backend via AJAX
    fetch('/users/register', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-Requested-With': 'XMLHttpRequest'
        },
        body: JSON.stringify({ firstName, lastName, email, password })
    })
    .then(res => res.json())
    .then(data => {
        if (data.status === 'success') {
            showSuccess('Registration Successful', data.message);
            registerForm.reset();
            setTimeout(() => {
                registerFormContainer.classList.add('hidden');
                loginFormContainer.classList.remove('hidden');
                closeModal();
            }, 2000);
        } else {
            showError(data.message || 'Registration failed. Please try again.');
        }
        submitBtn.disabled = false;
    })
    .catch(error => {
        showError('An error occurred. Please try again.');
        console.error(error);
        submitBtn.disabled = false;
    });
}


        // Handle forgot password form submission
        function handleForgotPassword(e) {
            e.preventDefault();
            
            const email = document.getElementById('forgotEmail').value;
            
            if (!email) {
                showError('Please enter your email address');
                return;
            }
            
            // In a real app, this would send a reset link to the email
            showSuccess('Reset Link Sent', 'If an account exists with this email, you will receive a password reset link shortly.');
            forgotPasswordForm.reset();
            setTimeout(() => {
                forgotPasswordContainer.classList.add('hidden');
                loginFormContainer.classList.remove('hidden');
                closeModal();
            }, 2000);
        }

        // Show success modal
        function showSuccess(title, message) {
            successTitle.textContent = title;
            successMessage.textContent = message;
            successModal.classList.remove('hidden');
        }

        // Close modal
        function closeModal() {
            successModal.classList.add('hidden');
        }

        // Show error message (simple alert for demo)
        function showError(message) {
            alert(message);
        }

           function handleLogin(e) {
    e.preventDefault();

    const loginForm = document.getElementById('loginForm');
    const loginFormContainer = document.getElementById('loginFormContainer');
    const submitBtn = document.getElementById('loginSubmit');

    const email = document.getElementById('loginEmail').value.trim();
    const password = document.getElementById('loginPassword').value.trim();

    // Disable button during request
    submitBtn.disabled = true;

    // Basic validation
    if (!email || !password) {
        showError('Please fill in all fields');
        submitBtn.disabled = false;
        return;
    }

    // Optional email format validation
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        showError('Invalid email format');
        submitBtn.disabled = false;
        return;
    }

    // Send AJAX login request to CI4
    fetch('/users/login', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-Requested-With': 'XMLHttpRequest'
        },
        body: JSON.stringify({ email, password })
    })
    .then(res => res.json())
    .then(data => {
        if (data.status === 'success') {
            showSuccess('Login Successful', data.message);
            loginForm.reset();

            setTimeout(() => {
                window.location.href = data.redirect || '/dashboard'; // Adjust as needed
            }, 1500);
        } else {
            showError(data.message || 'Invalid email or password');
        }
        submitBtn.disabled = false;
    })
    .catch(error => {
        showError('An error occurred. Please try again.');
        console.error(error);
        submitBtn.disabled = false;
    });
}
 







    </script>
</body>
</html>
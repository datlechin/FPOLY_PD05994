// Initialize the Angularjs app
const app = angular.module("myApp", ["ngRoute"]);

// Create routes for pages
app.config(function ($routeProvider) {
    $routeProvider
        .when("/", {
            title: "Trang chủ",
            templateUrl: "home.html",
            controller: HomeController,
        })
        .when("/math", {
            title: "Tính căn bậc 2",
            templateUrl: "math.html",
            controller: MathController,
        })
        .when("/login", {
            templateUrl: "login.html",
            controller: LoginController,
        })
        .when("/register", {
            templateUrl: "register.html",
            controller: RegisterController,
        })
        .when("/cart", {
            templateUrl: "cart.html",
            controller: CartController,
        })
        .when("/general", {
            templateUrl: "general.html",
            controller: GeneralController,
        })
});

// Factory used for set title for pages
app.factory("Page", function () {
    let title = "Trang chủ";
    return {
        title: () => title,
        setTitle: (newTitle) => (title = newTitle),
    };
});

// Main controller for handle common functions
app.controller("MainController", function ($scope, $location, Page) {
    $scope.Page = Page;
    // The method used for check current page
    $scope.isActive = function (route) {
        return route === $location.path();
    };
});

function HomeController($scope, Page) {
    Page.setTitle("Trang chủ");

    // Slides array
    $scope.slides = [
        {
            image: "./images/slide-1.png",
            text: "Sản phẩm mới nhất",
        },
        {
            image: "./images/slide-2.png",
            text: "Sản phẩm mới nhất",
        },
        {
            image: "./images/slide-3.png",
            text: "Sản phẩm mới nhất",
        },
        {
            image: "./images/slide-4.jpg",
            text: "Sản phẩm mới nhất",
        },
        {
            image: "./images/slide-5.webp",
            text: "Sản phẩm mới nhất",
        },
        {
            image: "./images/slide-6.png",
            text: "Sản phẩm mới nhất",
        },
        {
            image: "./images/slide-7.jpg",
            text: "Sản phẩm mới nhất",
        },
        {
            image: "./images/slide-8.png",
            text: "Sản phẩm mới nhất",
        },
    ];
    $scope.slideIndex = 0; // First slide
    // Method to next slide
    $scope.next = function () {
        $scope.slideIndex < $scope.slides.length - 1
            ? $scope.slideIndex++
            : ($scope.slideIndex = 0); // If last slide, go to first slide
    };
    // Method to previous slide
    $scope.prev = function () {
        $scope.slideIndex > 0
            ? $scope.slideIndex--
            : ($scope.slideIndex = $scope.slides.length - 1); // If first slide, go to last slide
    };
    // Check slide is changed
    $scope.$watch("slideIndex", function () {
        $scope.slides.forEach(function (slide) {
            slide.active = false; // hide all slides
        });
        $scope.slides[$scope.slideIndex].active = true; // show current slide
    });
    // Next slide every 5seconds
    setInterval(function () {
        $scope.$apply(function () {
            $scope.next();
        });
    }, 5000);
}

function MathController($scope, Page) {
    Page.setTitle("Tính căn bậc 2");
    $scope.count = 0; // Count calculation
    // Function for random number
    $scope.random = function ($event) {
        $event.preventDefault();
        $scope.resetForm();
        $scope.message = null;
        $scope.a = Math.floor(Math.random() * 10);
        $scope.b = Math.floor(Math.random() * 10);
        $scope.c = Math.floor(Math.random() * 10);
    };
    // Function calculate square root
    $scope.submit = function ($event) {
        $event.preventDefault();
        $scope.delta = $scope.b * $scope.b - 4 * $scope.a * $scope.c;
        $scope.root1 = (-$scope.b + Math.sqrt($scope.delta)) / (2 * $scope.a);
        $scope.root2 = (-$scope.b - Math.sqrt($scope.delta)) / (2 * $scope.a);

        // Validation form
        if ($scope.a < 1 || $scope.a > 10) {
            alert("a phải nằm trong khoảng từ 1 đến 10");
        } else if ($scope.b < 1 || $scope.b > 10) {
            alert("b phải nằm trong khoảng từ 1 đến 10");
        } else if ($scope.c < 1 || $scope.c > 10) {
            alert("c phải nằm trong khoảng từ 1 đến 10");
        } else {
            $scope.count++; // Plus count to 1
            if ($scope.delta < 0) {
                $scope.message = "Phương trình vô nghiệm";
            } else if ($scope.delta === 0) {
                $scope.message = "Phương trình có nghiệm kép: " + $scope.root1;
            } else {
                $scope.message =
                    "Phương trình có 2 nghiệm phân biệt: " +
                    Math.round($scope.root1) +
                    " và " +
                    Math.round($scope.root2);
            }
            $scope.resetForm(); // reset form
        }
    };

    // Function to set a, b, c to null
    $scope.resetForm = function () {
        $scope.a = null;
        $scope.b = null;
        $scope.c = null;
    };

    // refresh time every 0s
    setInterval(function () {
        $scope.now = new Date().toLocaleString();
        $scope.$apply();
    }, 0);
}

function LoginController($scope, Page, $location) {
    Page.setTitle("Đăng nhập");

    // Function handle login
    $scope.handleLogin = function () {
        // Validate form
        // If email = 'datnqpd05994@fpt.edu.vn' and password is '123456' then redirect to home
        if ($scope.email === 'datnqpd05994@fpt.edu.vn' && $scope.password === '123456') {
            Swal.fire({
                icon: 'success',
                title: 'Đăng nhập thành công',
            })
            // Redirect to home
            $location.path('/');
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Thông tin đăng nhập không chính xác',
            })
        }
    }
}

function RegisterController($scope, Page) {
    $scope.student = null;
    Page.setTitle("Đăng ký");

    // Function to handle register
    $scope.handleRegister = function () {
        Swal.fire({
            icon: 'success',
            title: 'Thành công',
            html: `Đăng ký tài khoản sinh viên thành công. <br><br> <b>Email</b>: ${ $scope.student.email } <br> <b>MSSV</b>: ${ $scope.student.mssv }`
        })
    }
}

function CartController($scope, Page) {
    Page.setTitle("Giỏ hàng");

    // Products array
    $scope.products = [
        {
            name: "Iphone 13 Pro Max",
            price: 30000000,
            quantity: 1,
            image: "./images/product-1.png",
            checked: false,
        },
        {
            name: "Oppo F1s",
            price: 5000000,
            quantity: 1,
            image: "./images/product-2.jpg",
            checked: false,
        },
        {
            name: "Samsung Galaxy S8",
            price: 13000000,
            quantity: 1,
            image: "./images/product-3.jfif",
            checked: false,
        },
        {
            name: "Xiaomi Mi Mix",
            price: 7000000,
            quantity: 1,
            image: "./images/product-4.jpg",
            checked: false,
        },
        {
            name: "Asus Zenfone Max Pro M1",
            price: 15000000,
            quantity: 1,
            image: "./images/product-5.jpg",
            checked: false,
        },
    ];
    // Function format number
    $scope.formatNumber = function (number) {
        return number.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,") + "đ";
    };
    // Function plus quantity product +1
    $scope.increase = function (product) {
        if (product.checked) {
            product.quantity++;
        }
    };
    // Function minus quantity product -1
    $scope.decrease = function (product) {
        if (product.checked) {
            product.quantity--;
        }
        // If quantity product = 0, remove product
        if (product.quantity === 0) {
            $scope.remove(product);
        }
    };
    // Function remove product from array
    $scope.remove = function (product) {
        let index = $scope.products.indexOf(product); // get index of product
        $scope.products.splice(index, 1); // then remove product
    };
    // Function calculate total price
    $scope.total = function () {
        let total = 0;
        $scope.products.forEach(function (product) {
            // check product checked then add to total
            if (product.checked) {
                total += product.price * product.quantity;
            }
        });
        return total;
    };
    // Function toggle checkbox
    $scope.toggleAll = function () {
        $scope.products.forEach(function (product) {
            product.checked = !product.checked;
        });
    }
}

function GeneralController($scope, Page) {
    Page.setTitle("Trang chủ");
    hljs.highlightAll();
}
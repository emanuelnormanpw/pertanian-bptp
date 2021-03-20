/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./public/assets/js/app.js":
/*!*********************************!*\
  !*** ./public/assets/js/app.js ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

!function ($) {
  "use strict";

  var MainApp = function MainApp() {};

  MainApp.prototype.intSlimscrollmenu = function () {
    $('.slimscroll-menu').slimscroll({
      height: 'auto',
      position: 'right',
      size: "5px",
      color: '#9ea5ab',
      wheelStep: 5,
      touchScrollStep: 50
    });
  }, MainApp.prototype.initSlimscroll = function () {
    $('.slimscroll').slimscroll({
      height: 'auto',
      position: 'right',
      size: "5px",
      color: '#9ea5ab',
      touchScrollStep: 50
    });
  }, MainApp.prototype.initMetisMenu = function () {
    //metis menu
    $("#side-menu").metisMenu();
  }, MainApp.prototype.initLeftMenuCollapse = function () {
    // Left menu collapse
    $('.button-menu-mobile').on('click', function (event) {
      event.preventDefault();
      $("body").toggleClass("enlarged");
    });
  }, MainApp.prototype.initEnlarge = function () {
    if ($(window).width() < 1025) {
      $('body').addClass('enlarged');
    } else {
      $('body').removeClass('enlarged');
    }
  }, MainApp.prototype.initActiveMenu = function () {
    // === following js will activate the menu in left side bar based on url ====
    $("#sidebar-menu a").each(function () {
      var pageUrl = window.location.href.split(/[?#]/)[0];

      if (this.href == pageUrl) {
        $(this).addClass("active");
        $(this).parent().addClass("active"); // add active to li of the current link

        $(this).parent().parent().addClass("in");
        $(this).parent().parent().prev().addClass("active"); // add active class to an anchor

        $(this).parent().parent().parent().addClass("active");
        $(this).parent().parent().parent().parent().addClass("in"); // add active to li of the current link

        $(this).parent().parent().parent().parent().parent().addClass("active");
      }
    });
  }, MainApp.prototype.initComponents = function () {
    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="popover"]').popover();
  }, MainApp.prototype.initHeaderCharts = function () {
    $('#header-chart-1').sparkline([8, 6, 4, 7, 10, 12, 7, 4, 9, 12, 13, 11, 12], {
      type: 'bar',
      height: '35',
      barWidth: '5',
      barSpacing: '3',
      barColor: '#7A6FBE'
    });
    $('#header-chart-2').sparkline([8, 6, 4, 7, 10, 12, 7, 4, 9, 12, 13, 11, 12], {
      type: 'bar',
      height: '35',
      barWidth: '5',
      barSpacing: '3',
      barColor: '#29bbe3'
    });
  }, MainApp.prototype.init = function () {
    this.intSlimscrollmenu();
    this.initSlimscroll();
    this.initMetisMenu();
    this.initLeftMenuCollapse();
    this.initEnlarge();
    this.initActiveMenu();
    this.initComponents();
    this.initHeaderCharts();
    Waves.init();
  }, //init
  $.MainApp = new MainApp(), $.MainApp.Constructor = MainApp;
}(window.jQuery), //initializing
function ($) {
  "use strict";

  $.MainApp.init();
}(window.jQuery);

/***/ }),

/***/ "./public/assets/scss/style.scss":
/*!***************************************!*\
  !*** ./public/assets/scss/style.scss ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!***********************************************************************!*\
  !*** multi ./public/assets/js/app.js ./public/assets/scss/style.scss ***!
  \***********************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/sikinthil/Documents/STORAGE/PROJECT/11. FE-Pertanian/pertanianHTML/public/assets/js/app.js */"./public/assets/js/app.js");
module.exports = __webpack_require__(/*! /Users/sikinthil/Documents/STORAGE/PROJECT/11. FE-Pertanian/pertanianHTML/public/assets/scss/style.scss */"./public/assets/scss/style.scss");


/***/ })

/******/ });
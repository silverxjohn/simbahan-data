/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
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
/******/ 	// identity function for calling harmony imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 128);
/******/ })
/************************************************************************/
/******/ ({

/***/ 128:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(22);


/***/ }),

/***/ 22:
/***/ (function(module, exports) {

var app = new Vue({
    el: '#app',
    data: {
        churches: [],
        currentPage: 1,
        limit: 25
    },
    created: function created() {
        var _this = this;

        axios.get('churches').then(function (response) {
            _this.churches = response.data;
        });
    },

    computed: {
        itemsCount: function itemsCount() {
            return Math.ceil(this.churches.length / this.limit);
        },
        paginatedChurches: function paginatedChurches() {
            var churchList = Object.assign([], this.churches);

            var firstItem = this.churches.length > 0 ? (this.currentPage - 1) * this.limit + 1 : 0;

            return churchList.splice(firstItem - 1, this.limit);
        },
        isFirstPage: function isFirstPage() {
            return this.currentPage == 1;
        },
        isLastPage: function isLastPage() {
            return this.currentPage == this.itemsCount;
        }
    },
    methods: {
        IncrementPage: function IncrementPage() {
            this.currentPage += 1;
        },
        DecrementPage: function DecrementPage() {
            this.currentPage -= 1;
        },
        isActivePage: function isActivePage(index) {
            return index == this.currentPage;
        },
        OnPaginatorButtonClicked: function OnPaginatorButtonClicked(page) {
            this.currentPage = page;
        },
        OnEditChurchClick: function OnEditChurchClick(id) {
            window.location.href = 'churches/' + id;
        },
        GetFirstItem: function GetFirstItem() {
            this.churches.length > 0 ? (this.currentPage - 1) * this.limit + 1 : 0;
        }
    }
});

/***/ })

/******/ });
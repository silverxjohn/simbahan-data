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
/******/ 	return __webpack_require__(__webpack_require__.s = 132);
/******/ })
/************************************************************************/
/******/ ({

/***/ 0:
/***/ (function(module, exports) {

// this module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle

module.exports = function normalizeComponent (
  rawScriptExports,
  compiledTemplate,
  scopeId,
  cssModules
) {
  var esModule
  var scriptExports = rawScriptExports = rawScriptExports || {}

  // ES6 modules interop
  var type = typeof rawScriptExports.default
  if (type === 'object' || type === 'function') {
    esModule = rawScriptExports
    scriptExports = rawScriptExports.default
  }

  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (compiledTemplate) {
    options.render = compiledTemplate.render
    options.staticRenderFns = compiledTemplate.staticRenderFns
  }

  // scopedId
  if (scopeId) {
    options._scopeId = scopeId
  }

  // inject cssModules
  if (cssModules) {
    var computed = Object.create(options.computed || null)
    Object.keys(cssModules).forEach(function (key) {
      var module = cssModules[key]
      computed[key] = function () { return module }
    })
    options.computed = computed
  }

  return {
    esModule: esModule,
    exports: scriptExports,
    options: options
  }
}


/***/ }),

/***/ 10:
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "row"
  }, [_vm._m(0), _vm._v(" "), _c('div', {
    staticClass: "col-md-4"
  }, [_c('div', {
    staticClass: "input-group"
  }, [_vm._m(1), _vm._v(" "), _c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.organizationUrl),
      expression: "organizationUrl"
    }],
    staticClass: "form-control",
    attrs: {
      "id": "organizationurl",
      "type": "text"
    },
    domProps: {
      "value": (_vm.organizationUrl)
    },
    on: {
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.organizationUrl = $event.target.value
      }
    }
  })])]), _vm._v(" "), _c('div', {
    staticClass: "col-md-2"
  }, [_c('button', {
    staticClass: "btn btn-primary",
    on: {
      "click": _vm.OnBtnFindOrganizationClicked
    }
  }, [_vm._v("Find Organization")])])])
},staticRenderFns: [function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "col-md-2"
  }, [_c('label', {
    attrs: {
      "for": "organizationurl"
    }
  }, [_vm._v("Enter Organization URL")])])
},function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "input-group-btn"
  }, [_c('button', {
    staticClass: "btn btn-danger",
    attrs: {
      "type": "button"
    }
  }, [_vm._v("http://")])])
}]}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-4c513bce", module.exports)
  }
}

/***/ }),

/***/ 116:
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('schedule-field', {
    attrs: {
      "schedule": _vm.massSchedule.Time
    },
    on: {
      "schedule-updated": _vm.OnScheduleUpdated
    }
  })
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-75dc370c", module.exports)
  }
}

/***/ }),

/***/ 132:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(26);


/***/ }),

/***/ 2:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['schedule'],
    data: function data() {
        return {
            isEditing: false,
            isCreating: this.editSchedule == '',
            editSchedule: ''
        };
    },
    mounted: function mounted() {
        this.editSchedule = this.schedule;
        this.isCreating = this.editSchedule == '';
    },

    methods: {
        OnBtnAddClicked: function OnBtnAddClicked() {
            this.isEditing = true;
        },
        OnBtnSaveClicked: function OnBtnSaveClicked() {
            this.$emit('schedule-updated', this.editSchedule);
            this.isEditing = false;
            this.isCreating = this.editSchedule == '';
        },
        OnBtnEditClicked: function OnBtnEditClicked() {
            this.isEditing = true;
        }
    }
});

/***/ }),

/***/ 26:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__components_OrganizationFinder_vue__ = __webpack_require__(8);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__components_OrganizationFinder_vue___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0__components_OrganizationFinder_vue__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__schedules_MassScheduleField_vue__ = __webpack_require__(97);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__schedules_MassScheduleField_vue___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1__schedules_MassScheduleField_vue__);



var app = new Vue({
    el: '#app',
    data: {
        organization: {
            OrganizationName: ''
        },
        massDetails: []
    },
    methods: {
        OnOrganizationFound: function OnOrganizationFound(organization) {
            this.organization = organization;
            this.GetMassDetails(organization.OrganizationID);
        },
        GetMassDetails: function GetMassDetails(organizationId) {
            var _this = this;

            this.massDetails = [];
            axios.get(base_url + '/organizations/' + organizationId + '/mass-details').then(function (response) {
                _this.massDetails = response.data;
            });
        },
        OnMassDetailsUpdated: function OnMassDetailsUpdated() {
            this.GetMassDetails(this.organization.OrganizationID);
        }
    },
    components: {
        OrganizationFinder: __WEBPACK_IMPORTED_MODULE_0__components_OrganizationFinder_vue___default.a,
        MassScheduleField: __WEBPACK_IMPORTED_MODULE_1__schedules_MassScheduleField_vue___default.a
    }
});

/***/ }),

/***/ 3:
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(0)(
  /* script */
  __webpack_require__(2),
  /* template */
  __webpack_require__(4),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "C:\\laragon\\www\\simbahan-data\\resources\\assets\\js\\components\\ScheduleField.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] ScheduleField.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-250f481a", Component.options)
  } else {
    hotAPI.reload("data-v-250f481a", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),

/***/ 4:
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', [_c('label', {
    directives: [{
      name: "show",
      rawName: "v-show",
      value: (!_vm.isEditing),
      expression: "!isEditing"
    }]
  }, [_vm._v(_vm._s(_vm.editSchedule))]), _vm._v(" "), (_vm.isCreating) ? _c('a', {
    directives: [{
      name: "show",
      rawName: "v-show",
      value: (!_vm.isEditing),
      expression: "!isEditing"
    }],
    attrs: {
      "href": "#"
    },
    on: {
      "click": function($event) {
        $event.preventDefault();
        _vm.OnBtnAddClicked($event)
      }
    }
  }, [_c('span', {
    staticClass: "fa fa-plus-circle"
  })]) : _c('a', {
    directives: [{
      name: "show",
      rawName: "v-show",
      value: (!_vm.isEditing),
      expression: "!isEditing"
    }],
    attrs: {
      "href": "#"
    },
    on: {
      "click": function($event) {
        $event.preventDefault();
        _vm.OnBtnEditClicked($event)
      }
    }
  }, [_c('span', {
    staticClass: "fa fa-edit"
  })]), _vm._v(" "), _c('div', {
    directives: [{
      name: "show",
      rawName: "v-show",
      value: (_vm.isEditing),
      expression: "isEditing"
    }],
    staticClass: "input-group input-group-sm"
  }, [_c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.editSchedule),
      expression: "editSchedule"
    }],
    staticClass: "form-control",
    attrs: {
      "type": "text"
    },
    domProps: {
      "value": (_vm.editSchedule)
    },
    on: {
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.editSchedule = $event.target.value
      }
    }
  }), _vm._v(" "), _c('span', {
    staticClass: "input-group-btn"
  }, [_c('button', {
    staticClass: "btn btn-info btn-flat",
    attrs: {
      "type": "button"
    },
    on: {
      "click": function($event) {
        $event.preventDefault();
        _vm.OnBtnSaveClicked($event)
      }
    }
  }, [_vm._v("Save")])])])])
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-250f481a", module.exports)
  }
}

/***/ }),

/***/ 6:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    data: function data() {
        return {
            organizationUrl: ''
        };
    },

    methods: {
        OnBtnFindOrganizationClicked: function OnBtnFindOrganizationClicked() {
            var _this = this;

            var organizationId = this.organizationUrl;

            if (this.organizationUrl.match('=') != null) {
                organizationId = this.organizationUrl.split('=')[1];
            } else if (this.organizationUrl.match('/') != null) {
                organizationId = this.organizationUrl.split('/')[this.organizationUrl.split('/').length - 1];
            }

            axios.get(base_url + '/organizations/' + organizationId).then(function (response) {
                _this.$emit('organization-found', response.data);
            });
        }
    }
});

/***/ }),

/***/ 69:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__components_ScheduleField_vue__ = __webpack_require__(3);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__components_ScheduleField_vue___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0__components_ScheduleField_vue__);
//
//
//
//



/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['mass-schedule'],
    methods: {
        CreateMassSchedule: function CreateMassSchedule(time) {
            var _this = this;

            axios.post(base_url + '/organizations/' + this.massSchedule.OrganizationID + '/mass-details', {
                time: time,
                schedule_id: this.massSchedule.ScheduleID,
                organization_id: this.massSchedule.OrganizationID,
                time_standard_id: this.massSchedule.TimeStandardID
            }).then(function (response) {
                _this.$emit('mass-details-updated');
                alert('Mass Schedule has been created successfully!');
                //swal('Success!', 'Mass Schedule has been created successfully!', 'success');
            });
        },
        UpdateMassSchedule: function UpdateMassSchedule(time) {
            var _this2 = this;

            axios.patch(base_url + '/organizations/' + this.massSchedule.OrganizationID + '/mass-details/' + this.massSchedule.OrgMassID, {
                time: time
            }).then(function (response) {
                _this2.$emit('mass-details-updated');
                alert('Mass Schedule has been updated successfully!');
                //swal('Success!', 'Mass Schedule has been updated successfully!', 'success');
            });
        },
        DeleteMassSchedule: function DeleteMassSchedule() {
            var _this3 = this;

            axios.delete(base_url + '/organizations/' + this.massSchedule.OrganizationID + '/mass-details/' + this.massSchedule.OrgMassID).then(function (response) {
                _this3.$emit('mass-details-updated');
                alert('Mass Details deleted');
            });
        },
        OnScheduleUpdated: function OnScheduleUpdated(time) {
            if (time == '') {
                var deleteConfirmed = confirm('Would you like to delete this schedule instead?');
                if (deleteConfirmed) this.DeleteMassSchedule();else this.UpdateMassSchedule();
            } else if (this.massSchedule.OrgMassID != undefined || this.massSchedule.OrgMassID != null) this.UpdateMassSchedule(time);else this.CreateMassSchedule(time);
        }
    },
    components: {
        ScheduleField: __WEBPACK_IMPORTED_MODULE_0__components_ScheduleField_vue___default.a
    }
});

/***/ }),

/***/ 8:
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(0)(
  /* script */
  __webpack_require__(6),
  /* template */
  __webpack_require__(10),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "C:\\laragon\\www\\simbahan-data\\resources\\assets\\js\\components\\OrganizationFinder.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] OrganizationFinder.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-4c513bce", Component.options)
  } else {
    hotAPI.reload("data-v-4c513bce", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),

/***/ 97:
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(0)(
  /* script */
  __webpack_require__(69),
  /* template */
  __webpack_require__(116),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "C:\\laragon\\www\\simbahan-data\\resources\\assets\\js\\modules\\organizations\\schedules\\MassScheduleField.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] MassScheduleField.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-75dc370c", Component.options)
  } else {
    hotAPI.reload("data-v-75dc370c", Component.options)
  }
})()}

module.exports = Component.exports


/***/ })

/******/ });
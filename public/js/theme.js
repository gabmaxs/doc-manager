/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/*!*******************************!*\
  !*** ./resources/js/theme.js ***!
  \*******************************/
eval("$(window).on('load resize', function () {\n  //Add/remove class based on browser size when load/resize\n  var w = $(window).width();\n\n  if (w >= 1200) {\n    // if larger \n    $('#docs-sidebar').addClass('sidebar-visible').removeClass('sidebar-hidden');\n  } else {\n    // if smaller\n    $('#docs-sidebar').addClass('sidebar-hidden').removeClass('sidebar-visible');\n  }\n});\n$(document).ready(function () {\n  /* ====== Toggle Sidebar ======= */\n  $('#docs-sidebar-toggler').on('click', function () {\n    if ($('#docs-sidebar').hasClass('sidebar-visible')) {\n      $(\"#docs-sidebar\").removeClass('sidebar-visible').addClass('sidebar-hidden');\n    } else {\n      $(\"#docs-sidebar\").removeClass('sidebar-hidden').addClass('sidebar-visible');\n    }\n  });\n  /* ====== Activate scrollspy menu ===== */\n\n  $('body').scrollspy({\n    target: '#docs-nav',\n    offset: 100\n  });\n  /* ===== Smooth scrolling ====== */\n\n  $('#docs-sidebar a.scrollto').on('click', function (e) {\n    //store hash\n    var target = this.hash;\n    e.preventDefault();\n    $('body').scrollTo(target, 800, {\n      offset: -69,\n      'axis': 'y'\n    }); //Collapse sidebar after clicking\n\n    if ($('#docs-sidebar').hasClass('sidebar-visible') && $(window).width() < 1200) {\n      $('#docs-sidebar').removeClass('sidebar-visible').addClass('slidebar-hidden');\n    }\n  });\n  /* wmooth scrolling on page load if URL has a hash */\n\n  if (window.location.hash) {\n    var urlhash = window.location.hash;\n    $('body').scrollTo(urlhash, 800, {\n      offset: -69,\n      'axis': 'y'\n    });\n  }\n  /* Bootstrap lightbox */\n\n  /* Ref: http://ashleydw.github.io/lightbox/ */\n\n\n  $(document).delegate('*[data-toggle=\"lightbox\"]', 'click', function (e) {\n    e.preventDefault();\n    $(this).ekkoLightbox();\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvdGhlbWUuanM/YmM0ZCJdLCJuYW1lcyI6WyIkIiwid2luZG93Iiwib24iLCJ3Iiwid2lkdGgiLCJhZGRDbGFzcyIsInJlbW92ZUNsYXNzIiwiZG9jdW1lbnQiLCJyZWFkeSIsImhhc0NsYXNzIiwic2Nyb2xsc3B5IiwidGFyZ2V0Iiwib2Zmc2V0IiwiZSIsImhhc2giLCJwcmV2ZW50RGVmYXVsdCIsInNjcm9sbFRvIiwibG9jYXRpb24iLCJ1cmxoYXNoIiwiZGVsZWdhdGUiLCJla2tvTGlnaHRib3giXSwibWFwcGluZ3MiOiJBQUNBQSxDQUFDLENBQUNDLE1BQUQsQ0FBRCxDQUFVQyxFQUFWLENBQWEsYUFBYixFQUE0QixZQUFXO0FBRW5DO0FBQ0EsTUFBSUMsQ0FBQyxHQUFHSCxDQUFDLENBQUNDLE1BQUQsQ0FBRCxDQUFVRyxLQUFWLEVBQVI7O0FBRUgsTUFBR0QsQ0FBQyxJQUFJLElBQVIsRUFBYztBQUNWO0FBQ0FILElBQUFBLENBQUMsQ0FBQyxlQUFELENBQUQsQ0FBbUJLLFFBQW5CLENBQTRCLGlCQUE1QixFQUErQ0MsV0FBL0MsQ0FBMkQsZ0JBQTNEO0FBQ0gsR0FIRCxNQUdPO0FBQ0g7QUFDQU4sSUFBQUEsQ0FBQyxDQUFDLGVBQUQsQ0FBRCxDQUFtQkssUUFBbkIsQ0FBNEIsZ0JBQTVCLEVBQThDQyxXQUE5QyxDQUEwRCxpQkFBMUQ7QUFDSDtBQUNELENBWkQ7QUFlQU4sQ0FBQyxDQUFDTyxRQUFELENBQUQsQ0FBWUMsS0FBWixDQUFrQixZQUFXO0FBRTVCO0FBRUFSLEVBQUFBLENBQUMsQ0FBQyx1QkFBRCxDQUFELENBQTJCRSxFQUEzQixDQUE4QixPQUE5QixFQUF1QyxZQUFVO0FBRWhELFFBQUtGLENBQUMsQ0FBQyxlQUFELENBQUQsQ0FBbUJTLFFBQW5CLENBQTRCLGlCQUE1QixDQUFMLEVBQXNEO0FBRW5EVCxNQUFBQSxDQUFDLENBQUMsZUFBRCxDQUFELENBQW1CTSxXQUFuQixDQUErQixpQkFBL0IsRUFBa0RELFFBQWxELENBQTJELGdCQUEzRDtBQUdGLEtBTEQsTUFLTztBQUVKTCxNQUFBQSxDQUFDLENBQUMsZUFBRCxDQUFELENBQW1CTSxXQUFuQixDQUErQixnQkFBL0IsRUFBaURELFFBQWpELENBQTBELGlCQUExRDtBQUVGO0FBRUUsR0FiSjtBQWdCRzs7QUFDQUwsRUFBQUEsQ0FBQyxDQUFDLE1BQUQsQ0FBRCxDQUFVVSxTQUFWLENBQW9CO0FBQUNDLElBQUFBLE1BQU0sRUFBRSxXQUFUO0FBQXNCQyxJQUFBQSxNQUFNLEVBQUU7QUFBOUIsR0FBcEI7QUFJQTs7QUFDSFosRUFBQUEsQ0FBQyxDQUFDLDBCQUFELENBQUQsQ0FBOEJFLEVBQTlCLENBQWlDLE9BQWpDLEVBQTBDLFVBQVNXLENBQVQsRUFBVztBQUM5QztBQUNBLFFBQUlGLE1BQU0sR0FBRyxLQUFLRyxJQUFsQjtBQUNBRCxJQUFBQSxDQUFDLENBQUNFLGNBQUY7QUFDTmYsSUFBQUEsQ0FBQyxDQUFDLE1BQUQsQ0FBRCxDQUFVZ0IsUUFBVixDQUFtQkwsTUFBbkIsRUFBMkIsR0FBM0IsRUFBZ0M7QUFBQ0MsTUFBQUEsTUFBTSxFQUFFLENBQUMsRUFBVjtBQUFjLGNBQU87QUFBckIsS0FBaEMsRUFKb0QsQ0FNcEQ7O0FBQ0EsUUFBSVosQ0FBQyxDQUFDLGVBQUQsQ0FBRCxDQUFtQlMsUUFBbkIsQ0FBNEIsaUJBQTVCLEtBQWtEVCxDQUFDLENBQUNDLE1BQUQsQ0FBRCxDQUFVRyxLQUFWLEtBQW9CLElBQTFFLEVBQStFO0FBQzlFSixNQUFBQSxDQUFDLENBQUMsZUFBRCxDQUFELENBQW1CTSxXQUFuQixDQUErQixpQkFBL0IsRUFBa0RELFFBQWxELENBQTJELGlCQUEzRDtBQUNBO0FBRUQsR0FYRDtBQWFBOztBQUNBLE1BQUdKLE1BQU0sQ0FBQ2dCLFFBQVAsQ0FBZ0JILElBQW5CLEVBQXlCO0FBQ3hCLFFBQUlJLE9BQU8sR0FBR2pCLE1BQU0sQ0FBQ2dCLFFBQVAsQ0FBZ0JILElBQTlCO0FBQ0FkLElBQUFBLENBQUMsQ0FBQyxNQUFELENBQUQsQ0FBVWdCLFFBQVYsQ0FBbUJFLE9BQW5CLEVBQTRCLEdBQTVCLEVBQWlDO0FBQUNOLE1BQUFBLE1BQU0sRUFBRSxDQUFDLEVBQVY7QUFBYyxjQUFPO0FBQXJCLEtBQWpDO0FBQ0E7QUFHRDs7QUFDRzs7O0FBRUFaLEVBQUFBLENBQUMsQ0FBQ08sUUFBRCxDQUFELENBQVlZLFFBQVosQ0FBcUIsMkJBQXJCLEVBQWtELE9BQWxELEVBQTJELFVBQVNOLENBQVQsRUFBWTtBQUNuRUEsSUFBQUEsQ0FBQyxDQUFDRSxjQUFGO0FBQ0FmLElBQUFBLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUW9CLFlBQVI7QUFDSCxHQUhEO0FBUUgsQ0F6REQiLCJzb3VyY2VzQ29udGVudCI6WyJcbiQod2luZG93KS5vbignbG9hZCByZXNpemUnLCBmdW5jdGlvbigpIHtcbiAgIFxuICAgIC8vQWRkL3JlbW92ZSBjbGFzcyBiYXNlZCBvbiBicm93c2VyIHNpemUgd2hlbiBsb2FkL3Jlc2l6ZVxuICAgIHZhciB3ID0gJCh3aW5kb3cpLndpZHRoKCk7XG5cblx0aWYodyA+PSAxMjAwKSB7XG5cdCAgICAvLyBpZiBsYXJnZXIgXG5cdCAgICAkKCcjZG9jcy1zaWRlYmFyJykuYWRkQ2xhc3MoJ3NpZGViYXItdmlzaWJsZScpLnJlbW92ZUNsYXNzKCdzaWRlYmFyLWhpZGRlbicpO1xuXHR9IGVsc2Uge1xuXHQgICAgLy8gaWYgc21hbGxlclxuXHQgICAgJCgnI2RvY3Mtc2lkZWJhcicpLmFkZENsYXNzKCdzaWRlYmFyLWhpZGRlbicpLnJlbW92ZUNsYXNzKCdzaWRlYmFyLXZpc2libGUnKTtcblx0fVxufSk7XG5cblxuJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKSB7XG5cdFxuXHQvKiA9PT09PT0gVG9nZ2xlIFNpZGViYXIgPT09PT09PSAqL1xuXHRcblx0JCgnI2RvY3Mtc2lkZWJhci10b2dnbGVyJykub24oJ2NsaWNrJywgZnVuY3Rpb24oKXtcblx0XG5cdFx0aWYgKCAkKCcjZG9jcy1zaWRlYmFyJykuaGFzQ2xhc3MoJ3NpZGViYXItdmlzaWJsZScpICkge1xuXG5cdFx0XHQgICQoXCIjZG9jcy1zaWRlYmFyXCIpLnJlbW92ZUNsYXNzKCdzaWRlYmFyLXZpc2libGUnKS5hZGRDbGFzcygnc2lkZWJhci1oaWRkZW4nKTtcblx0XHRcdFxuXHRcdFx0XG5cdFx0fSBlbHNlIHtcblxuXHRcdFx0ICAkKFwiI2RvY3Mtc2lkZWJhclwiKS5yZW1vdmVDbGFzcygnc2lkZWJhci1oaWRkZW4nKS5hZGRDbGFzcygnc2lkZWJhci12aXNpYmxlJyk7XG5cdFx0XHRcblx0XHR9XG5cdFx0XHRcbiAgICB9KTtcbiAgICBcblxuICAgIC8qID09PT09PSBBY3RpdmF0ZSBzY3JvbGxzcHkgbWVudSA9PT09PSAqL1xuICAgICQoJ2JvZHknKS5zY3JvbGxzcHkoe3RhcmdldDogJyNkb2NzLW5hdicsIG9mZnNldDogMTAwfSk7XG4gICAgXG4gICAgXG4gICAgXG4gICAgLyogPT09PT0gU21vb3RoIHNjcm9sbGluZyA9PT09PT0gKi9cblx0JCgnI2RvY3Mtc2lkZWJhciBhLnNjcm9sbHRvJykub24oJ2NsaWNrJywgZnVuY3Rpb24oZSl7XG4gICAgICAgIC8vc3RvcmUgaGFzaFxuICAgICAgICB2YXIgdGFyZ2V0ID0gdGhpcy5oYXNoOyAgICBcbiAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuXHRcdCQoJ2JvZHknKS5zY3JvbGxUbyh0YXJnZXQsIDgwMCwge29mZnNldDogLTY5LCAnYXhpcyc6J3knfSk7XG5cdFx0XG5cdFx0Ly9Db2xsYXBzZSBzaWRlYmFyIGFmdGVyIGNsaWNraW5nXG5cdFx0aWYgKCQoJyNkb2NzLXNpZGViYXInKS5oYXNDbGFzcygnc2lkZWJhci12aXNpYmxlJykgJiYgJCh3aW5kb3cpLndpZHRoKCkgPCAxMjAwKXtcblx0XHRcdCQoJyNkb2NzLXNpZGViYXInKS5yZW1vdmVDbGFzcygnc2lkZWJhci12aXNpYmxlJykuYWRkQ2xhc3MoJ3NsaWRlYmFyLWhpZGRlbicpO1xuXHRcdH1cblx0XHRcblx0fSk7XG5cdFxuXHQvKiB3bW9vdGggc2Nyb2xsaW5nIG9uIHBhZ2UgbG9hZCBpZiBVUkwgaGFzIGEgaGFzaCAqL1xuXHRpZih3aW5kb3cubG9jYXRpb24uaGFzaCkge1xuXHRcdHZhciB1cmxoYXNoID0gd2luZG93LmxvY2F0aW9uLmhhc2g7XG5cdFx0JCgnYm9keScpLnNjcm9sbFRvKHVybGhhc2gsIDgwMCwge29mZnNldDogLTY5LCAnYXhpcyc6J3knfSk7XG5cdH1cblx0XG5cdFxuXHQvKiBCb290c3RyYXAgbGlnaHRib3ggKi9cbiAgICAvKiBSZWY6IGh0dHA6Ly9hc2hsZXlkdy5naXRodWIuaW8vbGlnaHRib3gvICovXG5cbiAgICAkKGRvY3VtZW50KS5kZWxlZ2F0ZSgnKltkYXRhLXRvZ2dsZT1cImxpZ2h0Ym94XCJdJywgJ2NsaWNrJywgZnVuY3Rpb24oZSkge1xuICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgICQodGhpcykuZWtrb0xpZ2h0Ym94KCk7XG4gICAgfSk7IFxuXG4gICAgXG4gICAgXG5cbn0pOyJdLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvdGhlbWUuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/theme.js\n");
/******/ })()
;
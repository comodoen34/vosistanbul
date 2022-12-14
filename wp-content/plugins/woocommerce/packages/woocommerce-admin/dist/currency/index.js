(this.wc = this.wc || {}),
  (this.wc.currency = (function (e) {
    var o = {};
    function t(r) {
      if (o[r]) return o[r].exports;
      var n = (o[r] = { i: r, l: !1, exports: {} });
      return e[r].call(n.exports, n, n.exports, t), (n.l = !0), n.exports;
    }
    return (
      (t.m = e),
      (t.c = o),
      (t.d = function (e, o, r) {
        t.o(e, o) || Object.defineProperty(e, o, { enumerable: !0, get: r });
      }),
      (t.r = function (e) {
        "undefined" != typeof Symbol &&
          Symbol.toStringTag &&
          Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }),
          Object.defineProperty(e, "__esModule", { value: !0 });
      }),
      (t.t = function (e, o) {
        if ((1 & o && (e = t(e)), 8 & o)) return e;
        if (4 & o && "object" == typeof e && e && e.__esModule) return e;
        var r = Object.create(null);
        if (
          (t.r(r),
          Object.defineProperty(r, "default", { enumerable: !0, value: e }),
          2 & o && "string" != typeof e)
        )
          for (var n in e)
            t.d(
              r,
              n,
              function (o) {
                return e[o];
              }.bind(null, n)
            );
        return r;
      }),
      (t.n = function (e) {
        var o =
          e && e.__esModule
            ? function () {
                return e.default;
              }
            : function () {
                return e;
              };
        return t.d(o, "a", o), o;
      }),
      (t.o = function (e, o) {
        return Object.prototype.hasOwnProperty.call(e, o);
      }),
      (t.p = ""),
      t((t.s = 464))
    );
  })({
    0: function (e, o) {
      e.exports = window.wp.element;
    },
    122: function (e, o) {
      e.exports = window.wc.number;
    },
    2: function (e, o) {
      e.exports = window.wp.i18n;
    },
    34: function (e, o) {
      e.exports = window.wp.htmlEntities;
    },
    44: function (e, o) {
      e.exports = window.wp.deprecated;
    },
    464: function (e, o, t) {
      "use strict";
      t.r(o),
        t.d(o, "getCurrencyData", function () {
          return u;
        });
      var r = t(0),
        n = t(34),
        i = t(2),
        a = t(122),
        s = t(44),
        c = t.n(s);
      function u() {
        return (
          c()("getCurrencyData", {
            version: "3.1.0",
            alternative: "CurrencyFactory.getDataForCountry",
            plugin: "WooCommerce Admin",
            hint: "Pass in the country, locale data, and symbol info to use getDataForCountry",
          }),
          {
            US: {
              code: "USD",
              symbol: "$",
              symbolPosition: "left",
              thousandSeparator: ",",
              decimalSeparator: ".",
              precision: 2,
            },
            EU: {
              code: "EUR",
              symbol: "???",
              symbolPosition: "left",
              thousandSeparator: ".",
              decimalSeparator: ",",
              precision: 2,
            },
            IN: {
              code: "INR",
              symbol: "???",
              symbolPosition: "left",
              thousandSeparator: ",",
              decimalSeparator: ".",
              precision: 2,
            },
            GB: {
              code: "GBP",
              symbol: "??",
              symbolPosition: "left",
              thousandSeparator: ",",
              decimalSeparator: ".",
              precision: 2,
            },
            BR: {
              code: "BRL",
              symbol: "R$",
              symbolPosition: "left",
              thousandSeparator: ".",
              decimalSeparator: ",",
              precision: 2,
            },
            VN: {
              code: "VND",
              symbol: "???",
              symbolPosition: "right",
              thousandSeparator: ".",
              decimalSeparator: ",",
              precision: 1,
            },
            ID: {
              code: "IDR",
              symbol: "Rp",
              symbolPosition: "left",
              thousandSeparator: ".",
              decimalSeparator: ",",
              precision: 0,
            },
            BD: {
              code: "BDT",
              symbol: "???",
              symbolPosition: "left",
              thousandSeparator: ",",
              decimalSeparator: ".",
              precision: 0,
            },
            PK: {
              code: "PKR",
              symbol: "???",
              symbolPosition: "left",
              thousandSeparator: ",",
              decimalSeparator: ".",
              precision: 2,
            },
            RU: {
              code: "RUB",
              symbol: "???",
              symbolPosition: "right",
              thousandSeparator: " ",
              decimalSeparator: ",",
              precision: 2,
            },
            TR: {
              code: "TRY",
              symbol: "TL",
              symbolPosition: "left",
              thousandSeparator: ".",
              decimalSeparator: ",",
              precision: 2,
            },
            MX: {
              code: "MXN",
              symbol: "$",
              symbolPosition: "left",
              thousandSeparator: ",",
              decimalSeparator: ".",
              precision: 2,
            },
            CA: {
              code: "CAD",
              symbol: "$",
              symbolPosition: "left",
              thousandSeparator: ",",
              decimalSeparator: ".",
              precision: 2,
            },
          }
        );
      }
      o.default = function (e) {
        let o;
        function t(e) {
          const t = {
            code: "USD",
            symbol: "$",
            symbolPosition: "left",
            thousandSeparator: ",",
            decimalSeparator: ".",
            precision: 2,
            ...e,
          };
          o = {
            code: t.code.toString(),
            symbol: t.symbol.toString(),
            symbolPosition: t.symbolPosition.toString(),
            decimalSeparator: t.decimalSeparator.toString(),
            priceFormat: u(t),
            thousandSeparator: t.thousandSeparator.toString(),
            precision: parseInt(t.precision, 10),
          };
        }
        function s(e) {
          let t =
            arguments.length > 1 && void 0 !== arguments[1] && arguments[1];
          const r = Object(a.numberFormat)(o, e);
          if ("" === r) return r;
          const { priceFormat: n, symbol: s, code: c } = o;
          return Object(i.sprintf)(n, t ? c : s, r);
        }
        function u(e) {
          if (e.priceFormat)
            return (function (e) {
              const o = document.createElement("DIV");
              return (o.innerHTML = e), o.textContent || o.innerText || "";
            })(e.priceFormat.toString());
          switch (e.symbolPosition) {
            case "left":
              return "%1$s%2$s";
            case "right":
              return "%2$s%1$s";
            case "left_space":
              return "%1$s %2$s";
            case "right_space":
              return "%2$s %1$s";
          }
          return "%1$s%2$s";
        }
        return (
          t(e),
          {
            getCurrencyConfig: () => ({ ...o }),
            getDataForCountry: function (e) {
              let o =
                  arguments.length > 1 && void 0 !== arguments[1]
                    ? arguments[1]
                    : {},
                t =
                  arguments.length > 2 && void 0 !== arguments[2]
                    ? arguments[2]
                    : {};
              const r = o[e] || {},
                i = t[r.currency_code];
              return i
                ? {
                    code: r.currency_code,
                    symbol: Object(n.decodeEntities)(i),
                    symbolPosition: r.currency_pos,
                    thousandSeparator: r.thousand_sep,
                    decimalSeparator: r.decimal_sep,
                    precision: r.num_decimals,
                  }
                : {};
            },
            setCurrency: t,
            formatAmount: s,
            formatCurrency: function (e) {
              return (
                c()("Currency().formatCurrency", {
                  version: "5.0.0",
                  alternative: "Currency().formatAmount",
                  plugin: "WooCommerce",
                  hint: "`formatAmount` accepts the same arguments as formatCurrency",
                }),
                s(e)
              );
            },
            getPriceFormat: u,
            formatDecimal(e) {
              if (
                ("number" != typeof e && (e = parseFloat(e)), Number.isNaN(e))
              )
                return 0;
              const { precision: t } = o;
              return Math.round(e * Math.pow(10, t)) / Math.pow(10, t);
            },
            formatDecimalString(e) {
              if (
                ("number" != typeof e && (e = parseFloat(e)), Number.isNaN(e))
              )
                return "";
              const { precision: t } = o;
              return e.toFixed(t);
            },
            render: (e) => (
              "number" != typeof e && (e = parseFloat(e)),
              e < 0
                ? Object(r.createElement)(
                    "span",
                    { className: "is-negative" },
                    s(e)
                  )
                : s(e)
            ),
          }
        );
      };
    },
  }));

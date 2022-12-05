!(function () {
  "use strict";
  var o = {
      n: function (e) {
        var t =
          e && e.__esModule
            ? function () {
                return e.default;
              }
            : function () {
                return e;
              };
        return o.d(t, { a: t }), t;
      },
      d: function (e, t) {
        for (var r in t)
          o.o(t, r) &&
            !o.o(e, r) &&
            Object.defineProperty(e, r, { enumerable: !0, get: t[r] });
      },
      o: function (o, e) {
        return Object.prototype.hasOwnProperty.call(o, e);
      },
      r: function (o) {
        "undefined" != typeof Symbol &&
          Symbol.toStringTag &&
          Object.defineProperty(o, Symbol.toStringTag, { value: "Module" }),
          Object.defineProperty(o, "__esModule", { value: !0 });
      },
    },
    e = {};
  o.r(e),
    o.d(e, {
      default: function () {
        return c;
      },
      getCurrencyData: function () {
        return l;
      },
    });
  var t = window.wp.element,
    r = window.wp.htmlEntities,
    n = window.wp.i18n,
    a = window.wc.number,
    i = window.wp.deprecated,
    s = o.n(i),
    c = function (o) {
      let e;
      function i(o) {
        const t = {
          code: "USD",
          symbol: "$",
          symbolPosition: "left",
          thousandSeparator: ",",
          decimalSeparator: ".",
          precision: 2,
          ...o,
        };
        e = {
          code: t.code.toString(),
          symbol: t.symbol.toString(),
          symbolPosition: t.symbolPosition.toString(),
          decimalSeparator: t.decimalSeparator.toString(),
          priceFormat: l(t),
          thousandSeparator: t.thousandSeparator.toString(),
          precision: parseInt(t.precision, 10),
        };
      }
      function c(o) {
        let t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1];
        const r = (0, a.numberFormat)(e, o);
        if ("" === r) return r;
        const { priceFormat: i, symbol: s, code: c } = e;
        return (0, n.sprintf)(i, t ? c : s, r);
      }
      function l(o) {
        if (o.priceFormat)
          return (function (o) {
            const e = document.createElement("DIV");
            return (e.innerHTML = o), e.textContent || e.innerText || "";
          })(o.priceFormat.toString());
        switch (o.symbolPosition) {
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
        i(o),
        {
          getCurrencyConfig: () => ({ ...e }),
          getDataForCountry: function (o) {
            let e =
                arguments.length > 1 && void 0 !== arguments[1]
                  ? arguments[1]
                  : {},
              t =
                arguments.length > 2 && void 0 !== arguments[2]
                  ? arguments[2]
                  : {};
            const n = e[o] || {},
              a = t[n.currency_code];
            return a
              ? {
                  code: n.currency_code,
                  symbol: (0, r.decodeEntities)(a),
                  symbolPosition: n.currency_pos,
                  thousandSeparator: n.thousand_sep,
                  decimalSeparator: n.decimal_sep,
                  precision: n.num_decimals,
                }
              : {};
          },
          setCurrency: i,
          formatAmount: c,
          formatCurrency: function (o) {
            return (
              s()("Currency().formatCurrency", {
                version: "5.0.0",
                alternative: "Currency().formatAmount",
                plugin: "WooCommerce",
                hint: "`formatAmount` accepts the same arguments as formatCurrency",
              }),
              c(o)
            );
          },
          getPriceFormat: l,
          formatDecimal(o) {
            if (("number" != typeof o && (o = parseFloat(o)), Number.isNaN(o)))
              return 0;
            const { precision: t } = e;
            return Math.round(o * Math.pow(10, t)) / Math.pow(10, t);
          },
          formatDecimalString(o) {
            if (("number" != typeof o && (o = parseFloat(o)), Number.isNaN(o)))
              return "";
            const { precision: t } = e;
            return o.toFixed(t);
          },
          render: (o) => (
            "number" != typeof o && (o = parseFloat(o)),
            o < 0
              ? (0, t.createElement)("span", { className: "is-negative" }, c(o))
              : c(o)
          ),
        }
      );
    };
  function l() {
    return (
      s()("getCurrencyData", {
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
          symbol: "€",
          symbolPosition: "left",
          thousandSeparator: ".",
          decimalSeparator: ",",
          precision: 2,
        },
        IN: {
          code: "INR",
          symbol: "₹",
          symbolPosition: "left",
          thousandSeparator: ",",
          decimalSeparator: ".",
          precision: 2,
        },
        GB: {
          code: "GBP",
          symbol: "£",
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
          symbol: "₫",
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
          symbol: "৳",
          symbolPosition: "left",
          thousandSeparator: ",",
          decimalSeparator: ".",
          precision: 0,
        },
        PK: {
          code: "PKR",
          symbol: "₨",
          symbolPosition: "left",
          thousandSeparator: ",",
          decimalSeparator: ".",
          precision: 2,
        },
        RU: {
          code: "RUB",
          symbol: "₽",
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
  (window.wc = window.wc || {}).currency = e;
})();

(() => {
    var e, t = {
        304: (e, t, n) => {
            "use strict";

            function o(e, t, n) {
                return t in e ? Object.defineProperty(e, t, {
                    value: n,
                    enumerable: !0,
                    configurable: !0,
                    writable: !0
                }) : e[t] = n, e
            }

            n(972);
            var i = window.jQuery, a = i("#adminmenuwrap").outerWidth(), r = i("#wpadminbar").outerHeight(),
                c = i(".chaty-header").outerHeight(), s = Boolean(window.isRtl) ? "right" : "left", l = function () {
                    return innerWidth < 600 ? (scrollY <= r ? r - scrollY : 0) + "px" : r + "px"
                }, d = function () {
                    return innerWidth >= 783 ? a + "px" : 0
                }, h = function () {
                    return innerWidth < 640 ? (c || 0) + 20 : (c || 0) + r
                }, u = window.jQuery;

            function p(e, t) {
                var n = Object.keys(e);
                if (Object.getOwnPropertySymbols) {
                    var o = Object.getOwnPropertySymbols(e);
                    t && (o = o.filter((function (t) {
                        return Object.getOwnPropertyDescriptor(e, t).enumerable
                    }))), n.push.apply(n, o)
                }
                return n
            }

            function f(e) {
                for (var t = 1; t < arguments.length; t++) {
                    var n = null != arguments[t] ? arguments[t] : {};
                    t % 2 ? p(Object(n), !0).forEach((function (t) {
                        g(e, t, n[t])
                    })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(n)) : p(Object(n)).forEach((function (t) {
                        Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(n, t))
                    }))
                }
                return e
            }

            function g(e, t, n) {
                return t in e ? Object.defineProperty(e, t, {
                    value: n,
                    enumerable: !0,
                    configurable: !0,
                    writable: !0
                }) : e[t] = n, e
            }

            var v = window.jQuery;
            const w = function () {
                for (var e = arguments.length, t = new Array(e), n = 0; n < e; n++) t[n] = arguments[n];
                var o = t.reduceRight((function (e, t) {
                    return f(f({}, e), t)
                }), {});
                return function (e) {
                    return function (t) {
                        return e(f(f({}, t), o))
                    }
                }
            }({
                onLayoutChange: function (e) {
                    var t;
                    e((o(t = {top: l()}, s, d()), o(t, "width", "calc(100% - ".concat(d(), ")")), o(t, "content", h()), t)), onscroll = function () {
                        var t;
                        e((o(t = {top: l()}, s, d()), o(t, "width", "calc(100% - ".concat(d(), ")")), o(t, "content", h()), t))
                    }, i(document).on("wp-menu-state-set wp-collapse-menu", (function (t, n) {
                        var u;
                        a = i("#adminmenuwrap").outerWidth(), r = i("#wpadminbar").outerHeight(), c = i(".chaty-header").outerHeight(), e((o(u = {top: l()}, s, d()), o(u, "width", "calc(100% - ".concat(d(), ")")), o(u, "content", h()), u))
                    }))
                }
            }, {route: new URLSearchParams(window.location.search)})((function (e) {
                var t = v(".chaty-header"), n = v("#chaty-widget-body-tab"), o = v("#chaty-social-channel"),
                    i = v(".back-button"), a = v(".next-button"),
                    r = ["chaty-tab-social-channel", "chaty-tab-customize-widget", "chaty-tab-triger-targeting"],
                    c = Number(e.route.get("step") || 0);
                if (0 !== t.length && 0 !== o.length) {
                    e.onLayoutChange((function (e) {
                        t.css(e), n.css("margin-top", "".concat(e.content, "px"))
                    }));
                    var s = function (e) {
                        if (e < r.length && e >= 0) {
                            c = e, v(".social-channel-tabs").removeClass("active"), v("#".concat(r[e])).addClass("active"), v(".chaty-tab").removeClass("active completed").each((function () {
                                if (v(this).addClass("completed"), this.dataset.tabId === r[e]) return v(this).addClass("active"), !1
                            })), i.removeClass("cht-disable"), a.removeClass("cht-disable"), e <= 0 && i.addClass("cht-disable"), e >= r.length - 1 && a.addClass("cht-disable");
                            var t = new URL(window.location.href), n = t.searchParams;
                            n.set("step", e), t.search = n.toString();
                            var o = t.toString();
                            window.history.replaceState({page_id: e}, "", o)
                        }
                    };
                    s(c), t.find(".chaty-tab").on("click", (function () {
                        s(r.indexOf(this.dataset.tabId)), "fixed" === t.css("position") && window.scrollTo({
                            top: (innerWidth > 768 ? t.outerHeight() : 0) + 32 + "px",
                            left: 0,
                            behavior: "smooth"
                        })
                    })), a.on("click", (function () {
                        s(c + 1)
                    })), i.on("click", (function () {
                        s(c - 1)
                    })), u(".save-button-container .arrow-btn").on("click", (function () {
                        var e = u(".save-dashboard-button"), t = u(".footer-buttons").offset(), n = u(this).offset(),
                            o = n.top - t.top + 45, i = n.left - t.left + 40;
                        return 1 == u(this).attr("data-click-state") ? (u(this).attr("data-click-state", 0).removeClass("active"), e.css({display: "none"})) : (u(this).attr("data-click-state", 1).addClass("active"), e.css({
                            position: "absolute",
                            left: i + "px",
                            top: o + "px",
                            display: "inline-block",
                            transform: "translateX(-100%)"
                        })), !1
                    })), u(window).on("click", (function (e) {
                        u(".arrow-btn.active") && (u(".save-dashboard-button").css({display: "none"}), u(".arrow-btn.active").attr("data-click-state", 0).removeClass("active"))
                    }))
                }
            }));
            var m = window.jQuery, b = window.jQuery, y = window.jQuery;

            function C() {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : null;
                if (y("#active_widget").length) {
                    var t = y(".trigger-block-wrapper"), n = y(".widget-disable-alert"), o = y("#active_widget");
                    null === e && (e = o[0]), e.checked ? (t.show(), n.hide()) : (t.hide(), n.show()), y("#active_widget").on("change", (function () {
                        C(this)
                    }))
                }
            }

            var k = window.jQuery, j = window.jQuery, _ = window.jQuery, x = window.jQuery, P = window.jQuery,
                O = window.jQuery;
            var $ = window.jQuery;
            jQuery((function () {
                var e;
                w(), {
                    init: function () {
                        this.$previewBtn = m(".preview-help-btn"), this.$asidePreview = m(".preview-section-chaty"), this.resizeHandler(), this.$previewBtn.on("click", this.showPreview.bind(this)), this.$asidePreview.on("click", this.removePreview.bind(this)), m(window).resize(this.resizeHandler.bind(this))
                    }, showPreview: function (e) {
                        e.preventDefault(), e.stopPropagation(), this.$asidePreview.removeClass("pb-20 hidden").addClass("fixed top-0 left-0 flex items-center justify-center w-full h-screen bg-black/70").css("z-index", 9999999).attr("data-show", 1), this.$asidePreview.find(".preview").removeClass("sticky").css("max-width", "350px")
                    }, removeHandler: function () {
                        this.$asidePreview.addClass("pb-20 hidden").removeClass("fixed top-0 left-0 flex items-center justify-center w-full h-screen bg-black/70").removeAttr("style").attr("data-show", 0), this.$asidePreview.find(".preview").addClass("sticky").removeAttr("style")
                    }, removePreview: function (e) {
                        e && !e.target.closest(".preview") && 1 == this.$asidePreview.attr("data-show") && this.removeHandler()
                    }, position: function () {
                        var e = m("#chaty-widget-body-tab");
                        if (0 !== e.length) {
                            var t = e.offset(), n = jQuery(document).width();
                            return {
                                centerY: window.innerHeight / 2,
                                left: t.left,
                                right: n - (t.left + e.outerWidth()),
                                width: n,
                                containerWidth: e.outerWidth()
                            }
                        }
                    }, resizeHandler: function () {
                        if (this.position()) {
                            var e = this.position(), t = e.centerY;
                            e.right, e.width <= 1024 ? (this.$previewBtn.css({
                                top: t + "px",
                                right: 0,
                                transform: "rotate(-90deg) translateX(137%)",
                                opacity: 1,
                                zIndex: 999999
                            }), this.$asidePreview.addClass("hidden")) : (this.removeHandler(), this.$asidePreview.removeClass("hidden"), this.$previewBtn.css({opacity: 0}))
                        }
                    }
                }.init(), e = {
                    init: function () {
                        this.extendJquery(), this.trigger(!1, {
                            $scope: b(document),
                            element: ".chaty-color-field"
                        }), b(document).on("chatyColorPicker/trigger", this.trigger.bind(this))
                    }, STATE: {
                        current: null, set add(e) {
                            !e.is(this.current) && this.current && this.current.parent().next().slideUp(), this.current = e, this.closeAll
                        }, get closeAll() {
                            var e = this;
                            b("html, .preview-section-chaty").on("click", (function (t) {
                                t.target.closest(".cht-colorpicker__dropdown") || e.current.parent().next().slideUp()
                            }))
                        }
                    }, trigger: function () {
                        var e = this, t = arguments.length > 0 && void 0 !== arguments[0] && arguments[0],
                            n = arguments.length > 1 ? arguments[1] : void 0;
                        t && this.eventUtils(t);
                        var o = ["#202020", "#86cd91", "#1E88E5", "#ff6060", "#49E670", "#ffdb5e", "#ff95ee"];
                        n.$scope.find(n.element).each((function (t, i) {
                            var a = n.$scope.find(i);
                            if (!a.data("chaty-color-picker")) {
                                var r = a.val() || "#202020", c = AColorPicker.parseColor(r, "hex");
                                Object.assign({
                                    $scope: n.$scope,
                                    $input: a,
                                    defaultColor: r,
                                    colors: o,
                                    defaultColorDarker: e.colorLuminance(c, -.1)
                                }, e).addReplacer(), a.attr("data-chaty-color-picker", !0)
                            }
                        }))
                    }, eventUtils: function (e) {
                        e.preventDefault(), e.stopPropagation()
                    }, addReplacer: function () {
                        var e = this;
                        e.$input.css("display", "none"), e.$input.after('\n                <div class="cht-colorpicker replacer">\n                    <div class="cht-colorpicker__preview">\n                        <span class="cht-colorpicker__preview--inner" style="background-color: '.concat(e.defaultColor, "; border-color: ").concat(e.defaultColorDarker, '"></span>\n                    </div>\n                    <div class="cht-colorpicker__dropdown">\n                        ').concat(e.colorTemplate(), "\n                    </div>\n                </div>\n            "));
                        var t = e.$input.parent().find(".cht-colorpicker"), n = t.find(".cht-colorpicker__dropdown"),
                            o = AColorPicker.createPicker(n, {
                                attachTo: t,
                                color: this.defaultColor,
                                showAlpha: !0,
                                showHSL: !1
                            });
                        e.initalize(t), o.on("change", (function (n, o) {
                            e.onChange.call(e, o, t, !0)
                        }))
                    }, colorTemplate: function () {
                        var e = this;
                        return '\n            <ul class="palate">\n                '.concat(this.colors.map((function (t, n) {
                            return '<li data-color="'.concat(t, '" ').concat(t === e.defaultColor ? 'class="active"' : "", '>\n                    <span class="template-color" style="background-color: ').concat(t, '"></span>\n                </li>')
                        })).join(""), '\n                <li style="' + (this.colors.includes(this.defaultColor) ? "" : "background-color: " + this.defaultColor) + '" class="custom-color ').concat(this.colors.includes(this.defaultColor) ? "" : "active", '">\n                    <div>\n                        <svg class="pointer-events-none" width="16" height="16" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" svg-inline="" focusable="false" tabindex="-1"><path fill-rule="evenodd" clip-rule="evenodd" d="M7 1a1 1 0 00-2 0v4H1a1 1 0 000 2h4v4a1 1 0 102 0V7h4a1 1 0 100-2H7V1z" fill="currentColor"></path></svg>\n                    </div>\n                </li>\n            </ul>\n            ')
                    }, extendJquery: function () {
                        b.fn.extend({
                            premioFixHorizontalPosition: function () {
                                var e = this.parent().offset().left, t = innerWidth - e;
                                return this.outerWidth() + 40 > t && this.css("right", "0"), this
                            }
                        })
                    }, initalize: function (e) {
                        var t = this, n = e.find(".cht-colorpicker__preview--inner"),
                            o = e.find(".cht-colorpicker__dropdown"), i = e.find(".custom-color"),
                            a = e.find(".template-color"), r = e.find(".palate"), c = e.find(".a-color-picker");
                        n.on("click", (function (e) {
                            t.eventUtils(e), o.premioFixHorizontalPosition().slideToggle(), c.hide(), setTimeout((function () {
                                r.show()
                            }), 500), t.STATE.add = n
                        })), a.on("click", (function (n) {
                            t.eventUtils(n), e.find("li").removeClass("active");
                            var o = jQuery(this).parent();
                            o.addClass("active"), t.onChange.call(t, o.data("color"), e, !1)
                        })), i.on("click", (function () {
                            e.find("li").removeClass("active"), jQuery(this).parent().addClass("active"), r.hide(), c.show()
                        }))
                    }, colorLuminance: function (e, t) {
                        (e = String(e).replace(/[^0-9a-f]/gi, "")).length < 6 && (e = e[0] + e[0] + e[1] + e[1] + e[2] + e[2]), t = t || 0;
                        var n, o, i = "#";
                        for (o = 0; o < 3; o++) n = parseInt(e.substr(2 * o, 2), 16), i += ("00" + (n = Math.round(Math.min(Math.max(0, n + n * t), 255)).toString(16))).substr(n.length);
                        return i
                    }, updatePreviewColor: function (e, t, n) {
                        e.find(".cht-colorpicker__preview--inner").css({backgroundColor: t, borderColor: n})
                    }, updateCustomPreviewColor: function (e, t) {
                        e.find(".custom-color").css({backgroundColor: t, borderColor: t})
                    }, updateChannelIconColor: function (e) {
                        e.$scope;
                        var t = e.color, n = (e.type, e.channel);
                        jQuery("#chaty_image_" + n + " .custom-chaty-image").css("background-color", t), jQuery("#chaty_image_" + n + " .facustom-icon").css("background-color", t), jQuery("#chaty_image_" + n + " .color-element").css("fill", t)
                    }, updateAgentIconColor: function (e) {
                        e.$scope;
                        var t = e.color, n = (e.type, e.channel);
                        console.log("color: " + t), console.log("channel: " + n), jQuery("#image_agent_data_agent-" + n + " .custom-agent-image").css("background-color", t), jQuery("#image_agent_data_agent-" + n + " .facustom-icon").css("background-color", t), jQuery("#image_agent_data_agent-" + n + " .color-element").css("fill", t)
                    }, updateAgentUserIconColor: function (e) {
                        e.$scope;
                        var t = e.color, n = (e.type, e.channel), o = e.agentIndex;
                        jQuery("#image_agent_data_" + n + "-" + o + " .custom-agent-image").css("background-color", t), jQuery("#image_agent_data_" + n + "-" + o + " .facustom-icon").css("background-color", t), jQuery("#image_agent_data_" + n + "-" + o + " .color-element").css("fill", t)
                    }, onChange: function (e, t) {
                        var n = arguments.length > 2 && void 0 !== arguments[2] && arguments[2],
                            o = AColorPicker.parseColor(e, "hex"), i = n ? this.colorLuminance(o, -.1) : o,
                            a = t.parents(".chaty-channel").data("channel");
                        if (this.$input.val(e).attr("value", e), this.updatePreviewColor(t, e, i), n && this.updateCustomPreviewColor(t, i), this.$input.hasClass("chaty-bg-color") && (console.log("color: " + e), console.log("channel: " + a), this.updateChannelIconColor({
                            type: "chaty-bg-color",
                            $scope: jQuery(".custom-image-".concat(a)).parent(),
                            color: e,
                            channel: a
                        })), this.$input.hasClass("agent-bg-color") && this.updateAgentIconColor({
                            type: "agent-bg-color",
                            $scope: jQuery(".custom-image-".concat(a)).parent(),
                            color: e,
                            channel: a
                        }), this.$input.hasClass("agent-icon-color")) {
                            var r = t.parents(".agent-channel-setting").data("item");
                            this.updateAgentUserIconColor({
                                type: "agent-icon-color",
                                $scope: jQuery(".custom-image-".concat(a)).parent(),
                                color: e,
                                channel: a,
                                agentIndex: r
                            })
                        }
                        change_custom_preview()
                    }
                }, e.init(), C(), k(document).on("click", ".customize-agent-button", (function () {
                    var e = k(this).parents(".chaty-channel");
                    e.find(".customize-agent-button, .agent-button-action").toggleClass("enable"), e.find(".chaty-channel-main-settings").slideToggle(200)
                })), k(document).on("click", ".agent-channel-setting-button", (function () {
                    k(this).parents(".agent-channel-setting").find(".agent-channel-setting-advance").slideToggle(200), k(this).toggleClass("enable")
                })), j(".close-chaty-popup-btn").on("click", (function (e) {
                    e.stopPropagation(), j(".chaty-popup").hide(), j(this).hasClass("channel-setting-btn") && (j("#chaty-social-channel").trigger("click"), j(window).scrollTop(j("#channels-selected-list").offset().top - 120))
                })), _(".chaty-settings").on("click", (function (e) {
                    e.preventDefault(), e.stopPropagation(), _(this).toggleClass("enable");
                    var t = _(this).parents(".chaty-channel"), n = _(window).scrollTop(), o = t.offset().top - n - 130;
                    window.scrollBy({top: o, left: 0, behavior: "smooth"})
                })), x(".widget-size-control").on("change", (function () {
                    "radio" === this.type && (x("#custom-widget-size").css({display: "size-custom" === this.id ? "block" : "none"}), x(".widget-size-control").prop("checked", !1), x(this).prop("checked", !0)), x("#custom-widget-size-input").val(this.value), change_custom_preview()
                })), P(".chaty-targeted-collapse").on("click", (function (e) {
                    e.preventDefault();
                    var t = this.dataset.target, n = P("#".concat(t)), o = P(this);
                    n.slideToggle(300, (function () {
                        n.is(":hidden") ? o.find("svg").css("transform", "rotate(0deg)") : o.find("svg").css("transform", "rotate(90deg)")
                    }))
                })), wp.hooks.addAction("chaty.channel_update", "channelUpdateHandler", (function (e) {
                    var t = e.action, n = e.target, o = e.channel, i = e.isExceeded;
                    !function (e) {
                        var t = O(".popover-upgrade-pro");
                        e ? (t.addClass("flex shake-it").removeClass("hidden"), t.isInViewport() || t[0].scrollIntoView({
                            behavior: "smooth",
                            block: "center"
                        }), setTimeout((function () {
                            return t.removeClass("shake-it")
                        }), 1e3)) : t.removeClass("flex shake-it").addClass("hidden")
                    }(i), "added" === t && !i && n && function (e) {
                        O("#chaty-social-".concat(e))[0].scrollIntoView({behavior: "smooth", block: "center"})
                    }(n);
                    var a = o.length <= 1;
                    O(".chaty-widget-icon, .chaty-default-state, .chaty-icon-view").toggleClass("hidden", a)
                })), $(".create-rule").on("click", (function () {
                    $(this).parents(".chaty-option-box").addClass("show-remove-rule-button")
                })), $(".remove-rules").on("click", (function () {
                    $(this).parents(".chaty-option-box").removeClass("show-remove-rule-button")
                }))
            }))
        }, 972: () => {
            var e = window.jQuery;
            e.fn.isInViewport = function () {
                var t = e(this).offset().top, n = t + e(this).outerHeight(), o = e(window).scrollTop(),
                    i = o + e(window).height();
                return n > o && t < i
            }
        }, 303: () => {
        }
    }, n = {};

    function o(e) {
        var i = n[e];
        if (void 0 !== i) return i.exports;
        var a = n[e] = {exports: {}};
        return t[e](a, a.exports, o), a.exports
    }

    o.m = t, e = [], o.O = (t, n, i, a) => {
        if (!n) {
            var r = 1 / 0;
            for (d = 0; d < e.length; d++) {
                for (var [n, i, a] = e[d], c = !0, s = 0; s < n.length; s++) (!1 & a || r >= a) && Object.keys(o.O).every((e => o.O[e](n[s]))) ? n.splice(s--, 1) : (c = !1, a < r && (r = a));
                if (c) {
                    e.splice(d--, 1);
                    var l = i();
                    void 0 !== l && (t = l)
                }
            }
            return t
        }
        a = a || 0;
        for (var d = e.length; d > 0 && e[d - 1][2] > a; d--) e[d] = e[d - 1];
        e[d] = [n, i, a]
    }, o.o = (e, t) => Object.prototype.hasOwnProperty.call(e, t), (() => {
        var e = {561: 0, 782: 0};
        o.O.j = t => 0 === e[t];
        var t = (t, n) => {
            var i, a, [r, c, s] = n, l = 0;
            if (r.some((t => 0 !== e[t]))) {
                for (i in c) o.o(c, i) && (o.m[i] = c[i]);
                if (s) var d = s(o)
            }
            for (t && t(n); l < r.length; l++) a = r[l], o.o(e, a) && e[a] && e[a][0](), e[a] = 0;
            return o.O(d)
        }, n = self.webpackChunk = self.webpackChunk || [];
        n.forEach(t.bind(null, 0)), n.push = t.bind(null, n.push.bind(n))
    })(), o.O(void 0, [782], (() => o(304)));
    var i = o.O(void 0, [782], (() => o(303)));
    i = o.O(i)
})();

pimcore.registerNS("pimcore.plugin.sample");

pimcore.plugin.sample = Class.create(pimcore.plugin.admin, {
    getClassName: function() {
        return "pimcore.plugin.sample";
    },

    initialize: function() {
        pimcore.plugin.broker.registerPlugin(this);
    },

    pimcoreReady: function (params,broker){
        alert("Sample Plugin Ready!");
    }
});

var samplePlugin = new pimcore.plugin.sample();
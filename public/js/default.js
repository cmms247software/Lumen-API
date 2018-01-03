var socket = null;
const base_url = '//127.0.0.1:8000/';
var socket_connect = function() {
    if(!socket) {
        socket = new WebSocket('ws://127.0.0.1:8000/');
    }

    socket.onopen = function() {

    	console.log('onopen');

        var socket_send_message = function() {
	        socket.send(encodeURIComponent(JSON.stringify({ message: 'hi' })));
	    };

        socket.onmessage = function(e) {
            //var message = JSON.parse(decodeURIComponent(e.data)).message;
            console.log('onmessage', e);
            return false;
        };

        var socket_close = function() {
	        socket.close();
	    };
        socket.onclose = function(e) {
            console.log('onclose', e);
        };
    };
    return socket;
};

function convert_iso_to_date(iso_date) {
	iso_date  = new Date(iso_date);
	year = iso_date.getFullYear();
	month = iso_date.getMonth()+1;
	dt = iso_date.getDate();

	if (dt < 10) {
	  dt = '0' + dt;
	}
	if (month < 10) {
	  month = '0' + month;
	}
	return year+'-'+month+'-'+dt+' '+iso_date.toLocaleTimeString();
}

function is_empty(value) {
	if(typeof value === 'undefined')
		return true;
	else if(value === null)
		return true;
	else if(value === '')
		return true;
	else if(value === '0')
		return true;
	else if(value === 0)
		return true;
	else if(value.length === 0)
		return true;
	else if(value === 'null')
		return true;
	else if(value === NaN)
		return true;
	return false;
}

function validate_form(form_id) {
	var errorTemplate = '<div class="k-widget k-tooltip k-tooltip-validation" style="margin:0.5em"><span class="k-icon k-warning"> </span> #=message#<div class="k-callout k-callout-n"></div></div>';

	var validator = $(form_id).kendoValidator({
		errorTemplate: errorTemplate
	}).data("kendoValidator");

	var tooltip = $(form_id).kendoTooltip({
		filter: ".k-invalid",
		content: function(e) {
			var name = e.target.attr("name") || e.target.closest(".k-widget").find(".k-invalid:input").attr("name");
			var errorMessage = $(form_id).find("[data-for=" + name + "]");

			return '<span class="k-icon k-warning"> </span>' + errorMessage.text();
		},
		show: function() {
			this.refresh();
		}
	});

	var elements = $(form_id).find("[data-role=autocomplete],[data-role=combobox],[data-role=dropdownlist],[data-role=numerictextbox]");

	var hasMutationEvents = ("MutationEvent" in window),
	MutationObserver = window.WebKitMutationObserver || window.MutationObserver;

	if (MutationObserver) {
		var observer = new MutationObserver(function (mutations) {
			var idx = 0,
			mutation,
			length = mutations.length;

			for (; idx < length; idx++) {
				mutation = mutations[idx];
				if (mutation.attributeName === "class") {
					updateCssOnPropertyChange(mutation);
				}
			}
		}),
		config = { attributes: true, childList: false, characterData: false };

		elements.each(function () {
			observer.observe(this, config);
		});
	} else if (hasMutationEvents) {
		elements.bind("DOMAttrModified", updateCssOnPropertyChange);
	} else {
		elements.each(function () {
			this.attachEvent("onpropertychange", updateCssOnPropertyChange);
		});
	}
	return validator.validate();
}

function updateCssOnPropertyChange (e) {
	var element = $(e.target || e.srcElement);

	element.siblings("span.k-dropdown-wrap")
	.add(element.parent("span.k-numeric-wrap"))
	.toggleClass("k-invalid", element.hasClass("k-invalid"));
}

function get_all_input_values(id) {
	let all_value = '';
	$(id).each(function() {
		all_value += '&' + $(this).attr('name') + '=' + $(this).val();
	});
	return all_value;
}

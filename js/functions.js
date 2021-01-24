

function scrollFunction() {
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		mybutton.style.display = "block";
	} else {
		mybutton.style.display = "none";
	}
	if (document.body.scrollTop > window.innerHeight || document.documentElement.scrollTop > window.innerHeight) {
		sidepanel.style.display = "block";
	} else {
		sidepanel.style.display = "none";
	}
}

function sidepanel_toggle() {
	sidepanel.classList.toggle("extended");
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
	document.body.scrollTop = 0; // For Safari
	document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

function startFunction() {
	doScrolling("#cont1", 600);
	CurrentContainer = 1;
}

function getElementY(query) {
	return window.pageYOffset + document.querySelector(query).getBoundingClientRect().top
}

function doScrolling(element, duration) {
	var startingY = window.pageYOffset
	var elementY = getElementY(element)
	// If element is close to page's bottom then window will scroll only to some position above the element.
	var targetY = document.body.scrollHeight - elementY < window.innerHeight ? document.body.scrollHeight - window.innerHeight : elementY
	var diff = targetY - startingY
	// Easing function: easeInOutCubic
	// From: https://gist.github.com/gre/1650294
	var easing = function (t) { return t < .5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1 }
	var start

	if (!diff) return

	// Bootstrap our animation - it will get called right before next frame shall be rendered.
	window.requestAnimationFrame(function step(timestamp) {
		if (!start) start = timestamp
		// Elapsed miliseconds since start of scrolling.
		var time = timestamp - start
		// Get percent of completion in range [0, 1].
		var percent = Math.min(time / duration, 1)
		// Apply the easing.
		// It can cause bad-looking slow frames in browser performance tool, so be careful.
		percent = easing(percent)

		window.scrollTo(0, startingY + diff * percent)

		// Proceed with animation as long as we wanted it to.
		if (time < duration) {
			window.requestAnimationFrame(step)
		}
	})
}

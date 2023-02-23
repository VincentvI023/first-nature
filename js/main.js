var youtubeEmbedElement = document.getElementById("youtubeEmbed");
var tag = document.createElement("script");
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName("script")[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
var videoId = youtubeEmbedElement.dataset.videoId;
var startSeconds = 0;
var endSeconds = 10;

onYouTubeIframeAPIReady = function () {
	player = new YT.Player("youtubeEmbed", {
		videoId: videoId, // YouTube Video ID
		playerVars: {
			autoplay: 1, // Auto-play the video on load
			autohide: 1, // Hide video controls when playing
			disablekb: 1,
			controls: 0, // Hide pause/play buttons in player
			showinfo: 0, // Hide the video title
			modestbranding: 1, // Hide the Youtube Logo
			loop: 1, // Run the video in a loop
			fs: 0, // Hide the full screen button
			rel: 0,
			enablejsapi: 1,
			start: startSeconds,
			end: endSeconds
		},
		events: {
			onReady: function (e) {
				e.target.mute();
				e.target.playVideo();
			},
			onStateChange: function (e) {
				if (e.data === YT.PlayerState.PLAYING) {
					document.getElementById("youtubeEmbed").classList.add("loaded");
				}

				if (e.data === YT.PlayerState.ENDED) {
					// Loop from starting point
					player.seekTo(startSeconds);
				}
			}
		}
	});
};

// Button underline animation
document.addEventListener('DOMContentLoaded', function () {
	var elements = document.querySelectorAll('.orange-img-title.underline-animation');
	var windowHeight = window.innerHeight;

	function checkIfInView(element) {
		var windowTopPosition = window.pageYOffset;
		var windowBottomPosition = (windowTopPosition + windowHeight);

		var elementHeight = element.offsetHeight;
		var elementTopPosition = element.offsetTop;
		var elementBottomPosition = (elementTopPosition + elementHeight);

		// Voeg "visible" klasse toe als het element in het zicht is en de timeout is verlopen
		if ((elementBottomPosition >= windowTopPosition + 200) &&
			(elementTopPosition <= windowBottomPosition)) {
			setTimeout(function () {
				element.classList.add('visible');
			}, 2000);
		}
	}

	function checkAnimationElements() {
		// Loop door alle elementen en controleer of ze in het zicht zijn
		for (var i = 0; i < elements.length; i++) {
			var element = elements[i];

			// Controleer of het element nog niet zichtbaar is
			if (!element.classList.contains('visible')) {
				checkIfInView(element);
			}
		}
	}

	function onScroll() {
		checkAnimationElements();
	}

	function onResize() {
		windowHeight = window.innerHeight;
		checkAnimationElements();
	}

	// Voer check uit als de pagina laadt
	checkAnimationElements();

	// Luister naar scroll- en resize-evenementen
	window.addEventListener('scroll', onScroll);
	window.addEventListener('resize', onResize);
});
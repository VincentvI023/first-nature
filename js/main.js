// YouTube embeded video
// Get element
var youtubeEmbedElement = document.getElementById("youtubeEmbed");
console.log(youtubeEmbedElement);

// Add YouTube API script
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
	// Detect when the element is in the viewport
	var animation_elements = document.querySelectorAll('.underline-animation');
	var window_height = window.innerHeight;

	function check_if_in_view() {
		var window_top_position = window.pageYOffset;
		var window_bottom_position = (window_top_position + window_height);

		for (var i = 0; i < animation_elements.length; i++) {
			var element = animation_elements[i];
			var element_height = element.offsetHeight;
			var element_top_position = element.offsetTop;
			var element_bottom_position = (element_top_position + element_height);

			// If the element is in the viewport, add the "visible" class after a 2 second delay
			if ((element_bottom_position >= window_top_position + 200) &&
				(element_top_position <= window_bottom_position)) {
				setTimeout(function () {
					element.classList.add('visible');
				}, 2000);
			}
		}
	}

	window.addEventListener('scroll', check_if_in_view);
	window.addEventListener('resize', function () {
		window_height = window.innerHeight;
	});

	// Check if any elements are already in view on page load
	check_if_in_view();
});
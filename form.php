			<?php 
		session_start();
		if(isset($_SESSION["login"])) {
     echo '<p>already login click to <a href="/web2/logout.php">logout</a></p>';
} else {
    header('Location: http://localhost/web2/login.php');
}
		?>
	<!DOCTYPE HTML>
<!--
	Urban by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Urban by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<style type="text/css">
			@charset "UTF-8";
@import url(font-awesome.min.css);
@import url("https://fonts.googleapis.com/css?family=Scope+One|Trocchi");

/*
	Urban by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
*/

/* Reset */

	html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
		margin: 0;
		padding: 0;
		border: 0;
		font-size: 100%;
		font: inherit;
		vertical-align: baseline;
	}

	article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
		display: block;
	}

	body {
		line-height: 1;
	}

	ol, ul {
		list-style: none;
	}

	blockquote, q {
		quotes: none;
	}

	blockquote:before, blockquote:after, q:before, q:after {
		content: '';
		content: none;
	}

	table {
		border-collapse: collapse;
		border-spacing: 0;
	}

	body {
		-webkit-text-size-adjust: none;
	}

/* Box Model */

	*, *:before, *:after {
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
	}

/* Containers */

	.container {
		margin-left: auto;
		margin-right: auto;
	}

	.container.\31 25\25 {
		width: 100%;
		max-width: 100em;
		min-width: 80em;
	}

	.container.\37 5\25 {
		width: 60em;
	}

	.container.\35 0\25 {
		width: 40em;
	}

	.container.\32 5\25 {
		width: 20em;
	}

	.container {
		width: 80em;
	}

	@media screen and (max-width: 1680px) {

		.container.\31 25\25 {
			width: 100%;
			max-width: 100em;
			min-width: 80em;
		}

		.container.\37 5\25 {
			width: 60em;
		}

		.container.\35 0\25 {
			width: 40em;
		}

		.container.\32 5\25 {
			width: 20em;
		}

		.container {
			width: 80em;
		}

	}

	@media screen and (max-width: 1280px) {

		.container.\31 25\25 {
			width: 100%;
			max-width: 81.25em;
			min-width: 65em;
		}

		.container.\37 5\25 {
			width: 48.75em;
		}

		.container.\35 0\25 {
			width: 32.5em;
		}

		.container.\32 5\25 {
			width: 16.25em;
		}

		.container {
			width: 65em;
		}

	}

	@media screen and (max-width: 980px) {

		.container.\31 25\25 {
			width: 100%;
			max-width: 112.5%;
			min-width: 90%;
		}

		.container.\37 5\25 {
			width: 67.5%;
		}

		.container.\35 0\25 {
			width: 45%;
		}

		.container.\32 5\25 {
			width: 22.5%;
		}

		.container {
			width: 90%;
		}

	}

	@media screen and (max-width: 736px) {

		.container.\31 25\25 {
			width: 100%;
			max-width: 112.5%;
			min-width: 90%;
		}

		.container.\37 5\25 {
			width: 67.5%;
		}

		.container.\35 0\25 {
			width: 45%;
		}

		.container.\32 5\25 {
			width: 22.5%;
		}

		.container {
			width: 90% !important;
		}

	}

	@media screen and (max-width: 480px) {

		.container.\31 25\25 {
			width: 100%;
			max-width: 112.5%;
			min-width: 90%;
		}

		.container.\37 5\25 {
			width: 67.5%;
		}

		.container.\35 0\25 {
			width: 45%;
		}

		.container.\32 5\25 {
			width: 22.5%;
		}

		.container {
			width: 90% !important;
		}

	}

/* Grid */

	.row {
		border-bottom: solid 1px transparent;
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
	}

	.row > * {
		float: left;
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
	}

	.row:after, .row:before {
		content: '';
		display: block;
		clear: both;
		height: 0;
	}

	.row.uniform > * > :first-child {
		margin-top: 0;
	}

	.row.uniform > * > :last-child {
		margin-bottom: 0;
	}

	.row.\30 \25 > * {
		padding: 0 0 0 0em;
	}

	.row.\30 \25 {
		margin: 0 0 -1px 0em;
	}

	.row.uniform.\30 \25 > * {
		padding: 0em 0 0 0em;
	}

	.row.uniform.\30 \25 {
		margin: 0em 0 -1px 0em;
	}

	.row > * {
		padding: 0 0 0 2em;
	}

	.row {
		margin: 0 0 -1px -2em;
	}

	.row.uniform > * {
		padding: 2em 0 0 2em;
	}

	.row.uniform {
		margin: -2em 0 -1px -2em;
	}

	.row.\32 00\25 > * {
		padding: 0 0 0 4em;
	}

	.row.\32 00\25 {
		margin: 0 0 -1px -4em;
	}

	.row.uniform.\32 00\25 > * {
		padding: 4em 0 0 4em;
	}

	.row.uniform.\32 00\25 {
		margin: -4em 0 -1px -4em;
	}

	.row.\31 50\25 > * {
		padding: 0 0 0 3em;
	}

	.row.\31 50\25 {
		margin: 0 0 -1px -3em;
	}

	.row.uniform.\31 50\25 > * {
		padding: 3em 0 0 3em;
	}

	.row.uniform.\31 50\25 {
		margin: -3em 0 -1px -3em;
	}

	.row.\35 0\25 > * {
		padding: 0 0 0 1em;
	}

	.row.\35 0\25 {
		margin: 0 0 -1px -1em;
	}

	.row.uniform.\35 0\25 > * {
		padding: 1em 0 0 1em;
	}

	.row.uniform.\35 0\25 {
		margin: -1em 0 -1px -1em;
	}

	.row.\32 5\25 > * {
		padding: 0 0 0 0.5em;
	}

	.row.\32 5\25 {
		margin: 0 0 -1px -0.5em;
	}

	.row.uniform.\32 5\25 > * {
		padding: 0.5em 0 0 0.5em;
	}

	.row.uniform.\32 5\25 {
		margin: -0.5em 0 -1px -0.5em;
	}

	.\31 2u, .\31 2u\24 {
		width: 100%;
		clear: none;
		margin-left: 0;
	}

	.\31 1u, .\31 1u\24 {
		width: 91.6666666667%;
		clear: none;
		margin-left: 0;
	}

	.\31 0u, .\31 0u\24 {
		width: 83.3333333333%;
		clear: none;
		margin-left: 0;
	}

	.\39 u, .\39 u\24 {
		width: 75%;
		clear: none;
		margin-left: 0;
	}

	.\38 u, .\38 u\24 {
		width: 66.6666666667%;
		clear: none;
		margin-left: 0;
	}

	.\37 u, .\37 u\24 {
		width: 58.3333333333%;
		clear: none;
		margin-left: 0;
	}

	.\36 u, .\36 u\24 {
		width: 50%;
		clear: none;
		margin-left: 0;
	}

	.\35 u, .\35 u\24 {
		width: 41.6666666667%;
		clear: none;
		margin-left: 0;
	}

	.\34 u, .\34 u\24 {
		width: 33.3333333333%;
		clear: none;
		margin-left: 0;
	}

	.\33 u, .\33 u\24 {
		width: 25%;
		clear: none;
		margin-left: 0;
	}

	.\32 u, .\32 u\24 {
		width: 16.6666666667%;
		clear: none;
		margin-left: 0;
	}

	.\31 u, .\31 u\24 {
		width: 8.3333333333%;
		clear: none;
		margin-left: 0;
	}

	.\31 2u\24 + *,
	.\31 1u\24 + *,
	.\31 0u\24 + *,
	.\39 u\24 + *,
	.\38 u\24 + *,
	.\37 u\24 + *,
	.\36 u\24 + *,
	.\35 u\24 + *,
	.\34 u\24 + *,
	.\33 u\24 + *,
	.\32 u\24 + *,
	.\31 u\24 + * {
		clear: left;
	}

	.\-11u {
		margin-left: 91.66667%;
	}

	.\-10u {
		margin-left: 83.33333%;
	}

	.\-9u {
		margin-left: 75%;
	}

	.\-8u {
		margin-left: 66.66667%;
	}

	.\-7u {
		margin-left: 58.33333%;
	}

	.\-6u {
		margin-left: 50%;
	}

	.\-5u {
		margin-left: 41.66667%;
	}

	.\-4u {
		margin-left: 33.33333%;
	}

	.\-3u {
		margin-left: 25%;
	}

	.\-2u {
		margin-left: 16.66667%;
	}

	.\-1u {
		margin-left: 8.33333%;
	}

	@media screen and (max-width: 1680px) {

		.row > * {
			padding: 0 0 0 2em;
		}

		.row {
			margin: 0 0 -1px -2em;
		}

		.row.uniform > * {
			padding: 2em 0 0 2em;
		}

		.row.uniform {
			margin: -2em 0 -1px -2em;
		}

		.row.\32 00\25 > * {
			padding: 0 0 0 4em;
		}

		.row.\32 00\25 {
			margin: 0 0 -1px -4em;
		}

		.row.uniform.\32 00\25 > * {
			padding: 4em 0 0 4em;
		}

		.row.uniform.\32 00\25 {
			margin: -4em 0 -1px -4em;
		}

		.row.\31 50\25 > * {
			padding: 0 0 0 3em;
		}

		.row.\31 50\25 {
			margin: 0 0 -1px -3em;
		}

		.row.uniform.\31 50\25 > * {
			padding: 3em 0 0 3em;
		}

		.row.uniform.\31 50\25 {
			margin: -3em 0 -1px -3em;
		}

		.row.\35 0\25 > * {
			padding: 0 0 0 1em;
		}

		.row.\35 0\25 {
			margin: 0 0 -1px -1em;
		}

		.row.uniform.\35 0\25 > * {
			padding: 1em 0 0 1em;
		}

		.row.uniform.\35 0\25 {
			margin: -1em 0 -1px -1em;
		}

		.row.\32 5\25 > * {
			padding: 0 0 0 0.5em;
		}

		.row.\32 5\25 {
			margin: 0 0 -1px -0.5em;
		}

		.row.uniform.\32 5\25 > * {
			padding: 0.5em 0 0 0.5em;
		}

		.row.uniform.\32 5\25 {
			margin: -0.5em 0 -1px -0.5em;
		}

		.\31 2u\28xlarge\29, .\31 2u\24\28xlarge\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28xlarge\29, .\31 1u\24\28xlarge\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28xlarge\29, .\31 0u\24\28xlarge\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28xlarge\29, .\39 u\24\28xlarge\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28xlarge\29, .\38 u\24\28xlarge\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28xlarge\29, .\37 u\24\28xlarge\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28xlarge\29, .\36 u\24\28xlarge\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28xlarge\29, .\35 u\24\28xlarge\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28xlarge\29, .\34 u\24\28xlarge\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28xlarge\29, .\33 u\24\28xlarge\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28xlarge\29, .\32 u\24\28xlarge\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28xlarge\29, .\31 u\24\28xlarge\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28xlarge\29 + *,
		.\31 1u\24\28xlarge\29 + *,
		.\31 0u\24\28xlarge\29 + *,
		.\39 u\24\28xlarge\29 + *,
		.\38 u\24\28xlarge\29 + *,
		.\37 u\24\28xlarge\29 + *,
		.\36 u\24\28xlarge\29 + *,
		.\35 u\24\28xlarge\29 + *,
		.\34 u\24\28xlarge\29 + *,
		.\33 u\24\28xlarge\29 + *,
		.\32 u\24\28xlarge\29 + *,
		.\31 u\24\28xlarge\29 + * {
			clear: left;
		}

		.\-11u\28xlarge\29 {
			margin-left: 91.66667%;
		}

		.\-10u\28xlarge\29 {
			margin-left: 83.33333%;
		}

		.\-9u\28xlarge\29 {
			margin-left: 75%;
		}

		.\-8u\28xlarge\29 {
			margin-left: 66.66667%;
		}

		.\-7u\28xlarge\29 {
			margin-left: 58.33333%;
		}

		.\-6u\28xlarge\29 {
			margin-left: 50%;
		}

		.\-5u\28xlarge\29 {
			margin-left: 41.66667%;
		}

		.\-4u\28xlarge\29 {
			margin-left: 33.33333%;
		}

		.\-3u\28xlarge\29 {
			margin-left: 25%;
		}

		.\-2u\28xlarge\29 {
			margin-left: 16.66667%;
		}

		.\-1u\28xlarge\29 {
			margin-left: 8.33333%;
		}

	}

	@media screen and (max-width: 1280px) {

		.row > * {
			padding: 0 0 0 1.5em;
		}

		.row {
			margin: 0 0 -1px -1.5em;
		}

		.row.uniform > * {
			padding: 1.5em 0 0 1.5em;
		}

		.row.uniform {
			margin: -1.5em 0 -1px -1.5em;
		}

		.row.\32 00\25 > * {
			padding: 0 0 0 3em;
		}

		.row.\32 00\25 {
			margin: 0 0 -1px -3em;
		}

		.row.uniform.\32 00\25 > * {
			padding: 3em 0 0 3em;
		}

		.row.uniform.\32 00\25 {
			margin: -3em 0 -1px -3em;
		}

		.row.\31 50\25 > * {
			padding: 0 0 0 2.25em;
		}

		.row.\31 50\25 {
			margin: 0 0 -1px -2.25em;
		}

		.row.uniform.\31 50\25 > * {
			padding: 2.25em 0 0 2.25em;
		}

		.row.uniform.\31 50\25 {
			margin: -2.25em 0 -1px -2.25em;
		}

		.row.\35 0\25 > * {
			padding: 0 0 0 0.75em;
		}

		.row.\35 0\25 {
			margin: 0 0 -1px -0.75em;
		}

		.row.uniform.\35 0\25 > * {
			padding: 0.75em 0 0 0.75em;
		}

		.row.uniform.\35 0\25 {
			margin: -0.75em 0 -1px -0.75em;
		}

		.row.\32 5\25 > * {
			padding: 0 0 0 0.375em;
		}

		.row.\32 5\25 {
			margin: 0 0 -1px -0.375em;
		}

		.row.uniform.\32 5\25 > * {
			padding: 0.375em 0 0 0.375em;
		}

		.row.uniform.\32 5\25 {
			margin: -0.375em 0 -1px -0.375em;
		}

		.\31 2u\28large\29, .\31 2u\24\28large\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28large\29, .\31 1u\24\28large\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28large\29, .\31 0u\24\28large\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28large\29, .\39 u\24\28large\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28large\29, .\38 u\24\28large\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28large\29, .\37 u\24\28large\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28large\29, .\36 u\24\28large\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28large\29, .\35 u\24\28large\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28large\29, .\34 u\24\28large\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28large\29, .\33 u\24\28large\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28large\29, .\32 u\24\28large\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28large\29, .\31 u\24\28large\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28large\29 + *,
		.\31 1u\24\28large\29 + *,
		.\31 0u\24\28large\29 + *,
		.\39 u\24\28large\29 + *,
		.\38 u\24\28large\29 + *,
		.\37 u\24\28large\29 + *,
		.\36 u\24\28large\29 + *,
		.\35 u\24\28large\29 + *,
		.\34 u\24\28large\29 + *,
		.\33 u\24\28large\29 + *,
		.\32 u\24\28large\29 + *,
		.\31 u\24\28large\29 + * {
			clear: left;
		}

		.\-11u\28large\29 {
			margin-left: 91.66667%;
		}

		.\-10u\28large\29 {
			margin-left: 83.33333%;
		}

		.\-9u\28large\29 {
			margin-left: 75%;
		}

		.\-8u\28large\29 {
			margin-left: 66.66667%;
		}

		.\-7u\28large\29 {
			margin-left: 58.33333%;
		}

		.\-6u\28large\29 {
			margin-left: 50%;
		}

		.\-5u\28large\29 {
			margin-left: 41.66667%;
		}

		.\-4u\28large\29 {
			margin-left: 33.33333%;
		}

		.\-3u\28large\29 {
			margin-left: 25%;
		}

		.\-2u\28large\29 {
			margin-left: 16.66667%;
		}

		.\-1u\28large\29 {
			margin-left: 8.33333%;
		}

	}

	@media screen and (max-width: 980px) {

		.row > * {
			padding: 0 0 0 1.5em;
		}

		.row {
			margin: 0 0 -1px -1.5em;
		}

		.row.uniform > * {
			padding: 1.5em 0 0 1.5em;
		}

		.row.uniform {
			margin: -1.5em 0 -1px -1.5em;
		}

		.row.\32 00\25 > * {
			padding: 0 0 0 3em;
		}

		.row.\32 00\25 {
			margin: 0 0 -1px -3em;
		}

		.row.uniform.\32 00\25 > * {
			padding: 3em 0 0 3em;
		}

		.row.uniform.\32 00\25 {
			margin: -3em 0 -1px -3em;
		}

		.row.\31 50\25 > * {
			padding: 0 0 0 2.25em;
		}

		.row.\31 50\25 {
			margin: 0 0 -1px -2.25em;
		}

		.row.uniform.\31 50\25 > * {
			padding: 2.25em 0 0 2.25em;
		}

		.row.uniform.\31 50\25 {
			margin: -2.25em 0 -1px -2.25em;
		}

		.row.\35 0\25 > * {
			padding: 0 0 0 0.75em;
		}

		.row.\35 0\25 {
			margin: 0 0 -1px -0.75em;
		}

		.row.uniform.\35 0\25 > * {
			padding: 0.75em 0 0 0.75em;
		}

		.row.uniform.\35 0\25 {
			margin: -0.75em 0 -1px -0.75em;
		}

		.row.\32 5\25 > * {
			padding: 0 0 0 0.375em;
		}

		.row.\32 5\25 {
			margin: 0 0 -1px -0.375em;
		}

		.row.uniform.\32 5\25 > * {
			padding: 0.375em 0 0 0.375em;
		}

		.row.uniform.\32 5\25 {
			margin: -0.375em 0 -1px -0.375em;
		}

		.\31 2u\28medium\29, .\31 2u\24\28medium\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28medium\29, .\31 1u\24\28medium\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28medium\29, .\31 0u\24\28medium\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28medium\29, .\39 u\24\28medium\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28medium\29, .\38 u\24\28medium\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28medium\29, .\37 u\24\28medium\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28medium\29, .\36 u\24\28medium\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28medium\29, .\35 u\24\28medium\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28medium\29, .\34 u\24\28medium\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28medium\29, .\33 u\24\28medium\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28medium\29, .\32 u\24\28medium\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28medium\29, .\31 u\24\28medium\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28medium\29 + *,
		.\31 1u\24\28medium\29 + *,
		.\31 0u\24\28medium\29 + *,
		.\39 u\24\28medium\29 + *,
		.\38 u\24\28medium\29 + *,
		.\37 u\24\28medium\29 + *,
		.\36 u\24\28medium\29 + *,
		.\35 u\24\28medium\29 + *,
		.\34 u\24\28medium\29 + *,
		.\33 u\24\28medium\29 + *,
		.\32 u\24\28medium\29 + *,
		.\31 u\24\28medium\29 + * {
			clear: left;
		}

		.\-11u\28medium\29 {
			margin-left: 91.66667%;
		}

		.\-10u\28medium\29 {
			margin-left: 83.33333%;
		}

		.\-9u\28medium\29 {
			margin-left: 75%;
		}

		.\-8u\28medium\29 {
			margin-left: 66.66667%;
		}

		.\-7u\28medium\29 {
			margin-left: 58.33333%;
		}

		.\-6u\28medium\29 {
			margin-left: 50%;
		}

		.\-5u\28medium\29 {
			margin-left: 41.66667%;
		}

		.\-4u\28medium\29 {
			margin-left: 33.33333%;
		}

		.\-3u\28medium\29 {
			margin-left: 25%;
		}

		.\-2u\28medium\29 {
			margin-left: 16.66667%;
		}

		.\-1u\28medium\29 {
			margin-left: 8.33333%;
		}

	}

	@media screen and (max-width: 736px) {

		.row > * {
			padding: 0 0 0 1.25em;
		}

		.row {
			margin: 0 0 -1px -1.25em;
		}

		.row.uniform > * {
			padding: 1.25em 0 0 1.25em;
		}

		.row.uniform {
			margin: -1.25em 0 -1px -1.25em;
		}

		.row.\32 00\25 > * {
			padding: 0 0 0 2.5em;
		}

		.row.\32 00\25 {
			margin: 0 0 -1px -2.5em;
		}

		.row.uniform.\32 00\25 > * {
			padding: 2.5em 0 0 2.5em;
		}

		.row.uniform.\32 00\25 {
			margin: -2.5em 0 -1px -2.5em;
		}

		.row.\31 50\25 > * {
			padding: 0 0 0 1.875em;
		}

		.row.\31 50\25 {
			margin: 0 0 -1px -1.875em;
		}

		.row.uniform.\31 50\25 > * {
			padding: 1.875em 0 0 1.875em;
		}

		.row.uniform.\31 50\25 {
			margin: -1.875em 0 -1px -1.875em;
		}

		.row.\35 0\25 > * {
			padding: 0 0 0 0.625em;
		}

		.row.\35 0\25 {
			margin: 0 0 -1px -0.625em;
		}

		.row.uniform.\35 0\25 > * {
			padding: 0.625em 0 0 0.625em;
		}

		.row.uniform.\35 0\25 {
			margin: -0.625em 0 -1px -0.625em;
		}

		.row.\32 5\25 > * {
			padding: 0 0 0 0.3125em;
		}

		.row.\32 5\25 {
			margin: 0 0 -1px -0.3125em;
		}

		.row.uniform.\32 5\25 > * {
			padding: 0.3125em 0 0 0.3125em;
		}

		.row.uniform.\32 5\25 {
			margin: -0.3125em 0 -1px -0.3125em;
		}

		.\31 2u\28small\29, .\31 2u\24\28small\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28small\29, .\31 1u\24\28small\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28small\29, .\31 0u\24\28small\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28small\29, .\39 u\24\28small\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28small\29, .\38 u\24\28small\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28small\29, .\37 u\24\28small\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28small\29, .\36 u\24\28small\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28small\29, .\35 u\24\28small\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28small\29, .\34 u\24\28small\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28small\29, .\33 u\24\28small\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28small\29, .\32 u\24\28small\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28small\29, .\31 u\24\28small\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28small\29 + *,
		.\31 1u\24\28small\29 + *,
		.\31 0u\24\28small\29 + *,
		.\39 u\24\28small\29 + *,
		.\38 u\24\28small\29 + *,
		.\37 u\24\28small\29 + *,
		.\36 u\24\28small\29 + *,
		.\35 u\24\28small\29 + *,
		.\34 u\24\28small\29 + *,
		.\33 u\24\28small\29 + *,
		.\32 u\24\28small\29 + *,
		.\31 u\24\28small\29 + * {
			clear: left;
		}

		.\-11u\28small\29 {
			margin-left: 91.66667%;
		}

		.\-10u\28small\29 {
			margin-left: 83.33333%;
		}

		.\-9u\28small\29 {
			margin-left: 75%;
		}

		.\-8u\28small\29 {
			margin-left: 66.66667%;
		}

		.\-7u\28small\29 {
			margin-left: 58.33333%;
		}

		.\-6u\28small\29 {
			margin-left: 50%;
		}

		.\-5u\28small\29 {
			margin-left: 41.66667%;
		}

		.\-4u\28small\29 {
			margin-left: 33.33333%;
		}

		.\-3u\28small\29 {
			margin-left: 25%;
		}

		.\-2u\28small\29 {
			margin-left: 16.66667%;
		}

		.\-1u\28small\29 {
			margin-left: 8.33333%;
		}

	}

	@media screen and (max-width: 480px) {

		.row > * {
			padding: 0 0 0 1.25em;
		}

		.row {
			margin: 0 0 -1px -1.25em;
		}

		.row.uniform > * {
			padding: 1.25em 0 0 1.25em;
		}

		.row.uniform {
			margin: -1.25em 0 -1px -1.25em;
		}

		.row.\32 00\25 > * {
			padding: 0 0 0 2.5em;
		}

		.row.\32 00\25 {
			margin: 0 0 -1px -2.5em;
		}

		.row.uniform.\32 00\25 > * {
			padding: 2.5em 0 0 2.5em;
		}

		.row.uniform.\32 00\25 {
			margin: -2.5em 0 -1px -2.5em;
		}

		.row.\31 50\25 > * {
			padding: 0 0 0 1.875em;
		}

		.row.\31 50\25 {
			margin: 0 0 -1px -1.875em;
		}

		.row.uniform.\31 50\25 > * {
			padding: 1.875em 0 0 1.875em;
		}

		.row.uniform.\31 50\25 {
			margin: -1.875em 0 -1px -1.875em;
		}

		.row.\35 0\25 > * {
			padding: 0 0 0 0.625em;
		}

		.row.\35 0\25 {
			margin: 0 0 -1px -0.625em;
		}

		.row.uniform.\35 0\25 > * {
			padding: 0.625em 0 0 0.625em;
		}

		.row.uniform.\35 0\25 {
			margin: -0.625em 0 -1px -0.625em;
		}

		.row.\32 5\25 > * {
			padding: 0 0 0 0.3125em;
		}

		.row.\32 5\25 {
			margin: 0 0 -1px -0.3125em;
		}

		.row.uniform.\32 5\25 > * {
			padding: 0.3125em 0 0 0.3125em;
		}

		.row.uniform.\32 5\25 {
			margin: -0.3125em 0 -1px -0.3125em;
		}

		.\31 2u\28xsmall\29, .\31 2u\24\28xsmall\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28xsmall\29, .\31 1u\24\28xsmall\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28xsmall\29, .\31 0u\24\28xsmall\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28xsmall\29, .\39 u\24\28xsmall\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28xsmall\29, .\38 u\24\28xsmall\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28xsmall\29, .\37 u\24\28xsmall\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28xsmall\29, .\36 u\24\28xsmall\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28xsmall\29, .\35 u\24\28xsmall\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28xsmall\29, .\34 u\24\28xsmall\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28xsmall\29, .\33 u\24\28xsmall\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28xsmall\29, .\32 u\24\28xsmall\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28xsmall\29, .\31 u\24\28xsmall\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28xsmall\29 + *,
		.\31 1u\24\28xsmall\29 + *,
		.\31 0u\24\28xsmall\29 + *,
		.\39 u\24\28xsmall\29 + *,
		.\38 u\24\28xsmall\29 + *,
		.\37 u\24\28xsmall\29 + *,
		.\36 u\24\28xsmall\29 + *,
		.\35 u\24\28xsmall\29 + *,
		.\34 u\24\28xsmall\29 + *,
		.\33 u\24\28xsmall\29 + *,
		.\32 u\24\28xsmall\29 + *,
		.\31 u\24\28xsmall\29 + * {
			clear: left;
		}

		.\-11u\28xsmall\29 {
			margin-left: 91.66667%;
		}

		.\-10u\28xsmall\29 {
			margin-left: 83.33333%;
		}

		.\-9u\28xsmall\29 {
			margin-left: 75%;
		}

		.\-8u\28xsmall\29 {
			margin-left: 66.66667%;
		}

		.\-7u\28xsmall\29 {
			margin-left: 58.33333%;
		}

		.\-6u\28xsmall\29 {
			margin-left: 50%;
		}

		.\-5u\28xsmall\29 {
			margin-left: 41.66667%;
		}

		.\-4u\28xsmall\29 {
			margin-left: 33.33333%;
		}

		.\-3u\28xsmall\29 {
			margin-left: 25%;
		}

		.\-2u\28xsmall\29 {
			margin-left: 16.66667%;
		}

		.\-1u\28xsmall\29 {
			margin-left: 8.33333%;
		}

	}

/* Basic */

	@-ms-viewport {
		width: device-width;
	}

	body {
		-ms-overflow-style: scrollbar;
	}

	@media screen and (max-width: 480px) {

		html, body {
			min-width: 320px;
		}

	}

	body {
		background: #fff;
	}

		body.is-loading *, body.is-loading *:before, body.is-loading *:after {
			-moz-animation: none !important;
			-webkit-animation: none !important;
			-ms-animation: none !important;
			animation: none !important;
			-moz-transition: none !important;
			-webkit-transition: none !important;
			-ms-transition: none !important;
			transition: none !important;
		}

/* Type */

	body {
		background-color: #fff;
		color: #999999;
	}

	body, input, select, textarea {
		font-family: "Scope One", serif;
		font-size: 13pt;
		font-weight: 300;
		line-height: 1.65;
	}

		@media screen and (max-width: 1680px) {

			body, input, select, textarea {
				font-size: 11pt;
			}

		}

		@media screen and (max-width: 1280px) {

			body, input, select, textarea {
				font-size: 11pt;
			}

		}

		@media screen and (max-width: 980px) {

			body, input, select, textarea {
				font-size: 12pt;
			}

		}

		@media screen and (max-width: 736px) {

			body, input, select, textarea {
				font-size: 12pt;
			}

		}

		@media screen and (max-width: 480px) {

			body, input, select, textarea {
				font-size: 12pt;
			}

		}

	a {
		-moz-transition: color 0.2s ease-in-out;
		-webkit-transition: color 0.2s ease-in-out;
		-ms-transition: color 0.2s ease-in-out;
		transition: color 0.2s ease-in-out;
		text-decoration: none;
	}

	strong, b {
		font-weight: 700;
	}

	em, i {
		font-style: italic;
	}

	p {
		margin: 0 0 2em 0;
	}

	h1, h2, h3, h4, h5, h6 {
		font-weight: 700;
		line-height: 1.5;
		margin: 0 0 1em 0;
	}

		h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
			color: inherit;
			text-decoration: none;
		}

	h1 {
		font-size: 3em;
		margin-bottom: .25em;
	}

		@media screen and (max-width: 736px) {

			h1 {
				font-size: 2.5em;
			}

		}

	h2 {
		font-size: 2.5em;
	}

		@media screen and (max-width: 736px) {

			h2 {
				font-size: 2em;
			}

		}

		@media screen and (max-width: 480px) {

			h2 {
				font-size: 1.5em;
			}

		}

	h3 {
		font-size: 1.75em;
	}

		@media screen and (max-width: 736px) {

			h3 {
				font-size: 1.5em;
			}

		}

		@media screen and (max-width: 480px) {

			h3 {
				font-size: 1.25em;
			}

		}

	h4 {
		font-size: 1.5em;
	}

	h5 {
		font-size: 0.9em;
	}

	h6 {
		font-size: 0.7em;
	}

	sub {
		font-size: 0.8em;
		position: relative;
		top: 0.5em;
	}

	sup {
		font-size: 0.8em;
		position: relative;
		top: -0.5em;
	}

	blockquote {
		border-left: solid 4px;
		font-style: italic;
		margin: 0 0 2em 0;
		padding: 0.5em 0 0.5em 2em;
	}

	code {
		border-radius: 4px;
		border: solid 1px;
		font-family: "Courier New", monospace;
		font-size: 0.9em;
		margin: 0 0.25em;
		padding: 0.25em 0.65em;
	}

	pre {
		-webkit-overflow-scrolling: touch;
		font-family: "Courier New", monospace;
		font-size: 0.9em;
		margin: 0 0 2em 0;
	}

		pre code {
			display: block;
			line-height: 1.75;
			padding: 1em 1.5em;
			overflow-x: auto;
		}

	header p {
		font-size: 1.25em;
	}

	hr {
		border: 0;
		border-bottom: solid 1px;
		margin: 2em 0;
	}

		hr.major {
			margin: 3em 0;
		}

	.align-left {
		text-align: left;
	}

	.align-center {
		text-align: center;
	}

	.align-right {
		text-align: right;
	}

	input, select, textarea {
		color: #000;
	}

	a {
		color: #999999;
	}

		a:hover {
			color: rgba(153, 153, 153, 0.5);
		}

	strong, b {
		color: #000;
	}

	h1, h2, h3, h4, h5, h6 {
		color: #000;
	}

	blockquote {
		border-left-color: rgba(0, 0, 0, 0.1);
	}

	code {
		background: rgba(0, 0, 0, 0.075);
		border-color: rgba(0, 0, 0, 0.1);
	}

	hr {
		border-bottom-color: rgba(0, 0, 0, 0.1);
	}

/* Box */

	.box {
		border-radius: 4px;
		border: solid 1px;
		margin-bottom: 2em;
		padding: 1.5em;
	}

		.box > :last-child,
		.box > :last-child > :last-child,
		.box > :last-child > :last-child > :last-child {
			margin-bottom: 0;
		}

		.box.alt {
			border: 0;
			border-radius: 0;
			padding: 0;
		}

	.box {
		border-color: rgba(0, 0, 0, 0.1);
	}

/* Button */

	input[type="submit"],
	input[type="reset"],
	input[type="button"],
	button,
	.button {
		-moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		-moz-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
		-webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
		-ms-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
		transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
		border-radius: 4px;
		border: 0;
		cursor: pointer;
		display: inline-block;
		font-weight: 700;
		height: 2.85em;
		line-height: 2.95em;
		padding: 0 1.5em;
		text-align: center;
		text-decoration: none;
		white-space: nowrap;
	}

		input[type="submit"].icon,
		input[type="reset"].icon,
		input[type="button"].icon,
		button.icon,
		.button.icon {
			padding-left: 1.35em;
		}

			input[type="submit"].icon:before,
			input[type="reset"].icon:before,
			input[type="button"].icon:before,
			button.icon:before,
			.button.icon:before {
				margin-right: 0.5em;
			}

		input[type="submit"].fit,
		input[type="reset"].fit,
		input[type="button"].fit,
		button.fit,
		.button.fit {
			display: block;
			margin: 0 0 1em 0;
			width: 100%;
		}

		input[type="submit"].small,
		input[type="reset"].small,
		input[type="button"].small,
		button.small,
		.button.small {
			font-size: 0.8em;
		}

		input[type="submit"].big,
		input[type="reset"].big,
		input[type="button"].big,
		button.big,
		.button.big {
			font-size: 1.35em;
		}

		input[type="submit"].disabled, input[type="submit"]:disabled,
		input[type="reset"].disabled,
		input[type="reset"]:disabled,
		input[type="button"].disabled,
		input[type="button"]:disabled,
		button.disabled,
		button:disabled,
		.button.disabled,
		.button:disabled {
			-moz-pointer-events: none;
			-webkit-pointer-events: none;
			-ms-pointer-events: none;
			pointer-events: none;
			opacity: 0.25;
		}

		@media screen and (max-width: 480px) {

			input[type="submit"],
			input[type="reset"],
			input[type="button"],
			button,
			.button {
				padding: 0;
				width: 100%;
			}

		}

	input[type="submit"],
	input[type="reset"],
	input[type="button"],
	button,
	.button {
		background-color: #3498db;
		color: #fff !important;
	}

		input[type="submit"]:hover,
		input[type="reset"]:hover,
		input[type="button"]:hover,
		button:hover,
		.button:hover {
			background-color: #4aa3df;
		}

		input[type="submit"]:active,
		input[type="reset"]:active,
		input[type="button"]:active,
		button:active,
		.button:active {
			background-color: #258cd1;
		}

		input[type="submit"].alt,
		input[type="reset"].alt,
		input[type="button"].alt,
		button.alt,
		.button.alt {
			background-color: transparent;
			box-shadow: inset 0 0 0 2px rgba(0, 0, 0, 0.1);
			color: #000 !important;
		}

			input[type="submit"].alt:hover,
			input[type="reset"].alt:hover,
			input[type="button"].alt:hover,
			button.alt:hover,
			.button.alt:hover {
				background-color: rgba(0, 0, 0, 0.075);
			}

			input[type="submit"].alt:active,
			input[type="reset"].alt:active,
			input[type="button"].alt:active,
			button.alt:active,
			.button.alt:active {
				background-color: rgba(0, 0, 0, 0.15);
			}

			input[type="submit"].alt.icon:before,
			input[type="reset"].alt.icon:before,
			input[type="button"].alt.icon:before,
			button.alt.icon:before,
			.button.alt.icon:before {
				color: #bfbfbf;
			}

		input[type="submit"].special,
		input[type="reset"].special,
		input[type="button"].special,
		button.special,
		.button.special {
			background-color: #fafafa;
			color: #000 !important;
		}

			input[type="submit"].special:hover,
			input[type="reset"].special:hover,
			input[type="button"].special:hover,
			button.special:hover,
			.button.special:hover {
				background-color: white;
			}

			input[type="submit"].special:active,
			input[type="reset"].special:active,
			input[type="button"].special:active,
			button.special:active,
			.button.special:active {
				background-color: #ededed;
			}

/* Flex */

	.flex {
		display: -ms-flexbox;
		-ms-flex-pack: justify;
		display: -moz-flex;
		display: -webkit-flex;
		display: -ms-flex;
		display: flex;
		-moz-flex-wrap: wrap;
		-webkit-flex-wrap: wrap;
		-ms-flex-wrap: wrap;
		flex-wrap: wrap;
		-moz-justify-content: space-between;
		-webkit-justify-content: space-between;
		-ms-justify-content: space-between;
		justify-content: space-between;
	}

		.flex.flex-2, .flex.flex-3 {
			-moz-align-items: stretch;
			-webkit-align-items: stretch;
			-ms-align-items: stretch;
			align-items: stretch;
		}

			.flex.flex-2.center, .flex.flex-3.center {
				-moz-align-items: center;
				-webkit-align-items: center;
				-ms-align-items: center;
				align-items: center;
			}

		.flex.flex-2 .col {
			width: 48%;
		}

			.flex.flex-2 .col.col1 {
				width: 30%;
			}

			.flex.flex-2 .col.col2 {
				width: 66%;
			}

			@media screen and (max-width: 736px) {

				.flex.flex-2 .col.col1, .flex.flex-2 .col.col2 {
					width: 100%;
					margin-bottom: 2em;
				}

					.flex.flex-2 .col.col1 .image, .flex.flex-2 .col.col2 .image {
						max-width: 60%;
						margin: 0 auto 2em auto;
					}

			}

		.flex.flex-3 .col {
			width: 28%;
		}

			@media screen and (max-width: 736px) {

				.flex.flex-3 .col {
					width: 100%;
					margin-bottom: 2em;
				}

					.flex.flex-3 .col .image {
						max-width: 60%;
						margin: 0 auto 2em auto;
					}

			}

		.flex.flex-4 .col {
			width: 22%;
		}

		.flex.flex-tabs {
			-moz-flex-wrap: nowrap;
			-webkit-flex-wrap: nowrap;
			-ms-flex-wrap: nowrap;
			flex-wrap: nowrap;
		}

			.flex.flex-tabs ul {
				width: 20%;
			}

			.flex.flex-tabs .tabs {
				width: 77%;
			}

		@media screen and (max-width: 980px) {

			.flex.flex-4 .col {
				width: 48%;
			}

			.flex.flex-tabs ul {
				width: 30%;
			}

			.flex.flex-tabs .tabs {
				width: 67%;
			}

			.flex.flex-tabs .flex-3 .col {
				width: 48%;
			}

		}

		@media screen and (max-width: 736px) {

			.flex.flex-2 .col, .flex.flex-3 .col, .flex.flex-4 .col {
				width: 100%;
				-moz-order: 2;
				-webkit-order: 2;
				-ms-order: 2;
				order: 2;
			}

				.flex.flex-2 .col.first, .flex.flex-3 .col.first, .flex.flex-4 .col.first {
					-moz-order: 1;
					-webkit-order: 1;
					-ms-order: 1;
					order: 1;
				}

			.flex.flex-tabs {
				-moz-flex-wrap: wrap;
				-webkit-flex-wrap: wrap;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap;
			}

				.flex.flex-tabs ul {
					width: 100%;
				}

				.flex.flex-tabs .tabs {
					width: 100%;
				}

				.flex.flex-tabs .flex-3 .col {
					width: 100%;
				}

		}

/* Form */

	form {
		margin: 0 0 2em 0;
	}

	label {
		display: block;
		font-size: 0.9em;
		font-weight: 700;
		margin: 0 0 1em 0;
	}

	input[type="text"],
	input[type="password"],
	input[type="email"],
	select,
	textarea {
		-moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		border-radius: 4px;
		border: none;
		border: solid 1px;
		color: inherit;
		display: block;
		outline: 0;
		padding: 0 1em;
		text-decoration: none;
		width: 100%;
	}

		input[type="text"]:invalid,
		input[type="password"]:invalid,
		input[type="email"]:invalid,
		select:invalid,
		textarea:invalid {
			box-shadow: none;
		}

	.select-wrapper {
		text-decoration: none;
		display: block;
		position: relative;
	}

		.select-wrapper:before {
			-moz-osx-font-smoothing: grayscale;
			-webkit-font-smoothing: antialiased;
			font-family: FontAwesome;
			font-style: normal;
			font-weight: normal;
			text-transform: none !important;
		}

		.select-wrapper:before {
			content: '\f078';
			display: block;
			height: 2.75em;
			line-height: 2.75em;
			pointer-events: none;
			position: absolute;
			right: 0;
			text-align: center;
			top: 0;
			width: 2.75em;
		}

		.select-wrapper select::-ms-expand {
			display: none;
		}

	input[type="text"],
	input[type="password"],
	input[type="email"],
	select {
		height: 2.75em;
	}

	textarea {
		padding: 0.75em 1em;
	}

	input[type="checkbox"],
	input[type="radio"] {
		-moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		display: block;
		float: left;
		margin-right: -2em;
		opacity: 0;
		width: 1em;
		z-index: -1;
	}

		input[type="checkbox"] + label,
		input[type="radio"] + label {
			text-decoration: none;
			cursor: pointer;
			display: inline-block;
			font-size: 1em;
			font-weight: 300;
			padding-left: 2.4em;
			padding-right: 0.75em;
			position: relative;
		}

			input[type="checkbox"] + label:before,
			input[type="radio"] + label:before {
				-moz-osx-font-smoothing: grayscale;
				-webkit-font-smoothing: antialiased;
				font-family: FontAwesome;
				font-style: normal;
				font-weight: normal;
				text-transform: none !important;
			}

			input[type="checkbox"] + label:before,
			input[type="radio"] + label:before {
				border-radius: 4px;
				border: solid 1px;
				content: '';
				display: inline-block;
				height: 1.65em;
				left: 0;
				line-height: 1.58125em;
				position: absolute;
				text-align: center;
				top: 0;
				width: 1.65em;
			}

		input[type="checkbox"]:checked + label:before,
		input[type="radio"]:checked + label:before {
			content: '\f00c';
		}

	input[type="checkbox"] + label:before {
		border-radius: 4px;
	}

	input[type="radio"] + label:before {
		border-radius: 100%;
	}

	::-webkit-input-placeholder {
		opacity: 1.0;
	}

	:-moz-placeholder {
		opacity: 1.0;
	}

	::-moz-placeholder {
		opacity: 1.0;
	}

	:-ms-input-placeholder {
		opacity: 1.0;
	}

	.formerize-placeholder {
		opacity: 1.0;
	}

	label {
		color: #000;
	}

	input[type="text"],
	input[type="password"],
	input[type="email"],
	select,
	textarea {
		background: rgba(0, 0, 0, 0.075);
		border-color: rgba(0, 0, 0, 0.1);
	}

		input[type="text"]:focus,
		input[type="password"]:focus,
		input[type="email"]:focus,
		select:focus,
		textarea:focus {
			border-color: #fafafa;
			box-shadow: 0 0 0 1px #fafafa;
		}

	.select-wrapper:before {
		color: rgba(0, 0, 0, 0.1);
	}

	input[type="checkbox"] + label,
	input[type="radio"] + label {
		color: #999999;
	}

		input[type="checkbox"] + label:before,
		input[type="radio"] + label:before {
			background: rgba(0, 0, 0, 0.075);
			border-color: rgba(0, 0, 0, 0.1);
		}

	input[type="checkbox"]:checked + label:before,
	input[type="radio"]:checked + label:before {
		background-color: #fafafa;
		border-color: #fafafa;
		color: #000;
	}

	input[type="checkbox"]:focus + label:before,
	input[type="radio"]:focus + label:before {
		border-color: #fafafa;
		box-shadow: 0 0 0 1px #fafafa;
	}

	::-webkit-input-placeholder {
		color: #bfbfbf !important;
	}

	:-moz-placeholder {
		color: #bfbfbf !important;
	}

	::-moz-placeholder {
		color: #bfbfbf !important;
	}

	:-ms-input-placeholder {
		color: #bfbfbf !important;
	}

	.formerize-placeholder {
		color: #bfbfbf !important;
	}

/* Icon */

	.icon {
		text-decoration: none;
		border-bottom: none;
		position: relative;
	}

		.icon:before {
			-moz-osx-font-smoothing: grayscale;
			-webkit-font-smoothing: antialiased;
			font-family: FontAwesome;
			font-style: normal;
			font-weight: normal;
			text-transform: none !important;
		}

		.icon > .label {
			display: none;
		}

/* Image */

	.image {
		border: 0;
		display: inline-block;
		position: relative;
		box-shadow: 0px 0px 0px 7px #fff, 0px 0px 0px 8px rgba(0, 0, 0, 0.1);
	}

		.image img {
			display: block;
		}

		.image.left, .image.right {
			max-width: 40%;
		}

			.image.left img, .image.right img {
				width: 100%;
			}

		.image.left {
			float: left;
			margin: 0 1.5em 1em 0;
			top: 0.25em;
		}

		.image.right {
			float: right;
			margin: 0 0 1em 1.5em;
			top: 0.25em;
		}

		.image.fit {
			display: block;
			margin: 0 0 2em 0;
			width: 100%;
		}

			.image.fit img {
				width: 100%;
			}

		.image.round {
			border-radius: 100%;
		}

			.image.round img {
				border-radius: 100%;
			}

		.image.main {
			display: block;
			margin: 0 0 3em 0;
			width: 100%;
		}

			.image.main img {
				width: 100%;
			}

	.video-wrapper {
		position: relative;
		padding-bottom: 56.25%;
	/* 16:9 */

		padding-top: 25px;
		height: 0;
	}

		.video-wrapper iframe, .video-wrapper object, .video-wrapper embed {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
		}

/* List */

	ol {
		list-style: decimal;
		margin: 0 0 2em 0;
		padding-left: 1.25em;
	}

		ol li {
			padding-left: 0.25em;
		}

	ul {
		list-style: disc;
		margin: 0 0 2em 0;
		padding-left: 1em;
	}

		ul li {
			padding-left: 0.5em;
		}

		ul.alt {
			list-style: none;
			padding-left: 0;
		}

			ul.alt li {
				border-top: solid 1px;
				padding: 0.5em 0;
			}

				ul.alt li:first-child {
					border-top: 0;
					padding-top: 0;
				}

		ul.icons {
			cursor: default;
			list-style: none;
			padding-left: 0;
		}

			ul.icons li {
				display: inline-block;
				padding: 0 2em 0 0;
			}

				ul.icons li:last-child {
					padding-right: 0;
				}

				ul.icons li .icon:before {
					font-size: 2em;
				}

		ul.actions {
			cursor: default;
			list-style: none;
			padding-left: 0;
		}

			ul.actions li {
				display: inline-block;
				padding: 0 1em 0 0;
				vertical-align: middle;
			}

				ul.actions li:last-child {
					padding-right: 0;
				}

			ul.actions.small li {
				padding: 0 0.5em 0 0;
			}

			ul.actions.vertical li {
				display: block;
				padding: 1em 0 0 0;
			}

				ul.actions.vertical li:first-child {
					padding-top: 0;
				}

				ul.actions.vertical li > * {
					margin-bottom: 0;
				}

			ul.actions.vertical.small li {
				padding: 0.5em 0 0 0;
			}

				ul.actions.vertical.small li:first-child {
					padding-top: 0;
				}

			ul.actions.fit {
				display: table;
				margin-left: -1em;
				padding: 0;
				table-layout: fixed;
				width: calc(100% + 1em);
			}

				ul.actions.fit li {
					display: table-cell;
					padding: 0 0 0 1em;
				}

					ul.actions.fit li > * {
						margin-bottom: 0;
					}

				ul.actions.fit.small {
					margin-left: -0.5em;
					width: calc(100% + 0.5em);
				}

					ul.actions.fit.small li {
						padding: 0 0 0 0.5em;
					}

			@media screen and (max-width: 480px) {

				ul.actions {
					margin: 0 0 2em 0;
				}

					ul.actions li {
						padding: 1em 0 0 0;
						display: block;
						text-align: center;
						width: 100%;
					}

						ul.actions li:first-child {
							padding-top: 0;
						}

						ul.actions li > * {
							width: 100%;
							margin: 0 !important;
						}

							ul.actions li > *.icon:before {
								margin-left: -2em;
							}

					ul.actions.small li {
						padding: 0.5em 0 0 0;
					}

						ul.actions.small li:first-child {
							padding-top: 0;
						}

			}

	dl {
		margin: 0 0 2em 0;
	}

		dl dt {
			display: block;
			font-weight: 700;
			margin: 0 0 1em 0;
		}

		dl dd {
			margin-left: 2em;
		}

	ul.alt li {
		border-top-color: rgba(0, 0, 0, 0.1);
	}

/* Section/Article */

	section.special, article.special {
		text-align: center;
	}

	header p {
		position: relative;
		margin: 0 0 1.5em 0;
	}

	header h2 + p {
		font-size: 1.25em;
		margin-top: -1em;
	}

	header h3 + p {
		font-size: 1.1em;
		margin-top: -0.8em;
	}

	header h4 + p,
	header h5 + p,
	header h6 + p {
		font-size: 0.9em;
		margin-top: -0.6em;
	}

	header p {
		color: #bfbfbf;
	}

/* Tab */

	ul.tab-list {
		list-style: none;
		margin: 0 0 1em 0;
		padding: 0;
	}

		ul.tab-list li a {
			background: rgba(255, 255, 255, 0.075);
			border-radius: 4px;
			color: rgba(255, 255, 255, 0.5) !important;
			margin-bottom: .5em;
			padding: .5em 1em;
			display: inline-block;
			width: 100%;
		}

			ul.tab-list li a.active {
				background: #aa14cc;
				color: #fff !important;
			}

			ul.tab-list li a:hover {
				background: #693dcc;
				color: #fff !important;
			}

	.tab {
		display: none;
	}

		.tab.active {
			display: -ms-flexbox;
			display: -moz-flex;
			display: -webkit-flex;
			display: -ms-flex;
			display: flex;
		}

/* Table */

	.table-wrapper {
		-webkit-overflow-scrolling: touch;
		overflow-x: auto;
	}

	table {
		margin: 0 0 2em 0;
		width: 100%;
	}

		table tbody tr {
			border: solid 1px;
			border-left: 0;
			border-right: 0;
		}

		table td {
			padding: 0.75em 0.75em;
		}

		table th {
			font-size: 0.9em;
			font-weight: 700;
			padding: 0 0.75em 0.75em 0.75em;
			text-align: left;
		}

		table thead {
			border-bottom: solid 2px;
		}

		table tfoot {
			border-top: solid 2px;
		}

		table.alt {
			border-collapse: separate;
		}

			table.alt tbody tr td {
				border: solid 1px;
				border-left-width: 0;
				border-top-width: 0;
			}

				table.alt tbody tr td:first-child {
					border-left-width: 1px;
				}

			table.alt tbody tr:first-child td {
				border-top-width: 1px;
			}

			table.alt thead {
				border-bottom: 0;
			}

			table.alt tfoot {
				border-top: 0;
			}

	table tbody tr {
		border-color: rgba(0, 0, 0, 0.1);
	}

		table tbody tr:nth-child(2n + 1) {
			background-color: rgba(0, 0, 0, 0.075);
		}

	table th {
		color: #000;
	}

	table thead {
		border-bottom-color: rgba(0, 0, 0, 0.1);
	}

	table tfoot {
		border-top-color: rgba(0, 0, 0, 0.1);
	}

	table.alt tbody tr td {
		border-color: rgba(0, 0, 0, 0.1);
	}

/* Wrapper */

	.wrapper {
		padding: 6em 0 4em 0;
		position: relative;
	}

		.wrapper .inner {
			margin: 0 auto;
			width: 80em;
			position: relative;
			z-index: 99;
		}

		.wrapper header {
			margin-bottom: 4em;
		}

			@media screen and (max-width: 736px) {

				.wrapper header {
					margin-bottom: 2em;
				}

			}

		.wrapper.style1 {
			background-color: #fafafa;
			color: #999999;
		}

			.wrapper.style1 input, .wrapper.style1 select, .wrapper.style1 textarea {
				color: #000;
			}

			.wrapper.style1 a {
				color: #000;
			}

				.wrapper.style1 a:hover {
					color: rgba(0, 0, 0, 0.5);
				}

			.wrapper.style1 strong, .wrapper.style1 b {
				color: #000;
			}

			.wrapper.style1 h1, .wrapper.style1 h2, .wrapper.style1 h3, .wrapper.style1 h4, .wrapper.style1 h5, .wrapper.style1 h6 {
				color: #000;
			}

			.wrapper.style1 blockquote {
				border-left-color: rgba(0, 0, 0, 0.15);
			}

			.wrapper.style1 code {
				background: rgba(0, 0, 0, 0.075);
				border-color: rgba(0, 0, 0, 0.15);
			}

			.wrapper.style1 hr {
				border-bottom-color: rgba(0, 0, 0, 0.15);
			}

			.wrapper.style1 .box {
				border-color: rgba(0, 0, 0, 0.15);
			}

			.wrapper.style1 input[type="submit"],
			.wrapper.style1 input[type="reset"],
			.wrapper.style1 input[type="button"],
			.wrapper.style1 button,
			.wrapper.style1 .button {
				background-color: #3498db;
				color: #fff !important;
			}

				.wrapper.style1 input[type="submit"]:hover,
				.wrapper.style1 input[type="reset"]:hover,
				.wrapper.style1 input[type="button"]:hover,
				.wrapper.style1 button:hover,
				.wrapper.style1 .button:hover {
					background-color: #4aa3df;
				}

				.wrapper.style1 input[type="submit"]:active,
				.wrapper.style1 input[type="reset"]:active,
				.wrapper.style1 input[type="button"]:active,
				.wrapper.style1 button:active,
				.wrapper.style1 .button:active {
					background-color: #258cd1;
				}

				.wrapper.style1 input[type="submit"].alt,
				.wrapper.style1 input[type="reset"].alt,
				.wrapper.style1 input[type="button"].alt,
				.wrapper.style1 button.alt,
				.wrapper.style1 .button.alt {
					background-color: transparent;
					box-shadow: inset 0 0 0 2px rgba(0, 0, 0, 0.15);
					color: #000 !important;
				}

					.wrapper.style1 input[type="submit"].alt:hover,
					.wrapper.style1 input[type="reset"].alt:hover,
					.wrapper.style1 input[type="button"].alt:hover,
					.wrapper.style1 button.alt:hover,
					.wrapper.style1 .button.alt:hover {
						background-color: rgba(0, 0, 0, 0.075);
					}

					.wrapper.style1 input[type="submit"].alt:active,
					.wrapper.style1 input[type="reset"].alt:active,
					.wrapper.style1 input[type="button"].alt:active,
					.wrapper.style1 button.alt:active,
					.wrapper.style1 .button.alt:active {
						background-color: rgba(0, 0, 0, 0.2);
					}

					.wrapper.style1 input[type="submit"].alt.icon:before,
					.wrapper.style1 input[type="reset"].alt.icon:before,
					.wrapper.style1 input[type="button"].alt.icon:before,
					.wrapper.style1 button.alt.icon:before,
					.wrapper.style1 .button.alt.icon:before {
						color: #bfbfbf;
					}

				.wrapper.style1 input[type="submit"].special,
				.wrapper.style1 input[type="reset"].special,
				.wrapper.style1 input[type="button"].special,
				.wrapper.style1 button.special,
				.wrapper.style1 .button.special {
					background-color: #000;
					color: #fafafa !important;
				}

			.wrapper.style1 label {
				color: #000;
			}

			.wrapper.style1 input[type="text"],
			.wrapper.style1 input[type="password"],
			.wrapper.style1 input[type="email"],
			.wrapper.style1 select,
			.wrapper.style1 textarea {
				background: rgba(0, 0, 0, 0.075);
				border-color: rgba(0, 0, 0, 0.15);
			}

				.wrapper.style1 input[type="text"]:focus,
				.wrapper.style1 input[type="password"]:focus,
				.wrapper.style1 input[type="email"]:focus,
				.wrapper.style1 select:focus,
				.wrapper.style1 textarea:focus {
					border-color: #000;
					box-shadow: 0 0 0 1px #000;
				}

			.wrapper.style1 .select-wrapper:before {
				color: rgba(0, 0, 0, 0.15);
			}

			.wrapper.style1 input[type="checkbox"] + label,
			.wrapper.style1 input[type="radio"] + label {
				color: #999999;
			}

				.wrapper.style1 input[type="checkbox"] + label:before,
				.wrapper.style1 input[type="radio"] + label:before {
					background: rgba(0, 0, 0, 0.075);
					border-color: rgba(0, 0, 0, 0.15);
				}

			.wrapper.style1 input[type="checkbox"]:checked + label:before,
			.wrapper.style1 input[type="radio"]:checked + label:before {
				background-color: #000;
				border-color: #000;
				color: #fafafa;
			}

			.wrapper.style1 input[type="checkbox"]:focus + label:before,
			.wrapper.style1 input[type="radio"]:focus + label:before {
				border-color: #000;
				box-shadow: 0 0 0 1px #000;
			}

			.wrapper.style1 ::-webkit-input-placeholder {
				color: #bfbfbf !important;
			}

			.wrapper.style1 :-moz-placeholder {
				color: #bfbfbf !important;
			}

			.wrapper.style1 ::-moz-placeholder {
				color: #bfbfbf !important;
			}

			.wrapper.style1 :-ms-input-placeholder {
				color: #bfbfbf !important;
			}

			.wrapper.style1 .formerize-placeholder {
				color: #bfbfbf !important;
			}

			.wrapper.style1 ul.alt li {
				border-top-color: rgba(0, 0, 0, 0.15);
			}

			.wrapper.style1 header p {
				color: #bfbfbf;
			}

			.wrapper.style1 table tbody tr {
				border-color: rgba(0, 0, 0, 0.15);
			}

				.wrapper.style1 table tbody tr:nth-child(2n + 1) {
					background-color: rgba(0, 0, 0, 0.075);
				}

			.wrapper.style1 table th {
				color: #000;
			}

			.wrapper.style1 table thead {
				border-bottom-color: rgba(0, 0, 0, 0.15);
			}

			.wrapper.style1 table tfoot {
				border-top-color: rgba(0, 0, 0, 0.15);
			}

			.wrapper.style1 table.alt tbody tr td {
				border-color: rgba(0, 0, 0, 0.15);
			}

		.wrapper.style2 {
			background-color: #3498db;
			color: #aed6f1;
		}

			.wrapper.style2 input, .wrapper.style2 select, .wrapper.style2 textarea {
				color: #fff;
			}

			.wrapper.style2 a {
				color: #999999;
			}

				.wrapper.style2 a:hover {
					color: rgba(153, 153, 153, 0.5);
				}

			.wrapper.style2 strong, .wrapper.style2 b {
				color: #fff;
			}

			.wrapper.style2 h1, .wrapper.style2 h2, .wrapper.style2 h3, .wrapper.style2 h4, .wrapper.style2 h5, .wrapper.style2 h6 {
				color: #fff;
			}

			.wrapper.style2 blockquote {
				border-left-color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style2 code {
				background: rgba(255, 255, 255, 0.075);
				border-color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style2 hr {
				border-bottom-color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style2 .box {
				border-color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style2 input[type="submit"],
			.wrapper.style2 input[type="reset"],
			.wrapper.style2 input[type="button"],
			.wrapper.style2 button,
			.wrapper.style2 .button {
				background-color: #fff;
				color: #3498db !important;
			}

				.wrapper.style2 input[type="submit"].alt,
				.wrapper.style2 input[type="reset"].alt,
				.wrapper.style2 input[type="button"].alt,
				.wrapper.style2 button.alt,
				.wrapper.style2 .button.alt {
					background-color: transparent;
					box-shadow: inset 0 0 0 2px rgba(255, 255, 255, 0.25);
					color: #fff !important;
				}

					.wrapper.style2 input[type="submit"].alt:hover,
					.wrapper.style2 input[type="reset"].alt:hover,
					.wrapper.style2 input[type="button"].alt:hover,
					.wrapper.style2 button.alt:hover,
					.wrapper.style2 .button.alt:hover {
						background-color: rgba(255, 255, 255, 0.075);
					}

					.wrapper.style2 input[type="submit"].alt:active,
					.wrapper.style2 input[type="reset"].alt:active,
					.wrapper.style2 input[type="button"].alt:active,
					.wrapper.style2 button.alt:active,
					.wrapper.style2 .button.alt:active {
						background-color: rgba(255, 255, 255, 0.2);
					}

					.wrapper.style2 input[type="submit"].alt.icon:before,
					.wrapper.style2 input[type="reset"].alt.icon:before,
					.wrapper.style2 input[type="button"].alt.icon:before,
					.wrapper.style2 button.alt.icon:before,
					.wrapper.style2 .button.alt.icon:before {
						color: #67b2e4;
					}

				.wrapper.style2 input[type="submit"].special,
				.wrapper.style2 input[type="reset"].special,
				.wrapper.style2 input[type="button"].special,
				.wrapper.style2 button.special,
				.wrapper.style2 .button.special {
					background-color: #fafafa;
					color: #000 !important;
				}

					.wrapper.style2 input[type="submit"].special:hover,
					.wrapper.style2 input[type="reset"].special:hover,
					.wrapper.style2 input[type="button"].special:hover,
					.wrapper.style2 button.special:hover,
					.wrapper.style2 .button.special:hover {
						background-color: white;
					}

					.wrapper.style2 input[type="submit"].special:active,
					.wrapper.style2 input[type="reset"].special:active,
					.wrapper.style2 input[type="button"].special:active,
					.wrapper.style2 button.special:active,
					.wrapper.style2 .button.special:active {
						background-color: #ededed;
					}

			.wrapper.style2 label {
				color: #fff;
			}

			.wrapper.style2 input[type="text"],
			.wrapper.style2 input[type="password"],
			.wrapper.style2 input[type="email"],
			.wrapper.style2 select,
			.wrapper.style2 textarea {
				background: rgba(255, 255, 255, 0.075);
				border-color: rgba(255, 255, 255, 0.25);
			}

				.wrapper.style2 input[type="text"]:focus,
				.wrapper.style2 input[type="password"]:focus,
				.wrapper.style2 input[type="email"]:focus,
				.wrapper.style2 select:focus,
				.wrapper.style2 textarea:focus {
					border-color: #fafafa;
					box-shadow: 0 0 0 1px #fafafa;
				}

			.wrapper.style2 .select-wrapper:before {
				color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style2 input[type="checkbox"] + label,
			.wrapper.style2 input[type="radio"] + label {
				color: #aed6f1;
			}

				.wrapper.style2 input[type="checkbox"] + label:before,
				.wrapper.style2 input[type="radio"] + label:before {
					background: rgba(255, 255, 255, 0.075);
					border-color: rgba(255, 255, 255, 0.25);
				}

			.wrapper.style2 input[type="checkbox"]:checked + label:before,
			.wrapper.style2 input[type="radio"]:checked + label:before {
				background-color: #fafafa;
				border-color: #fafafa;
				color: #000;
			}

			.wrapper.style2 input[type="checkbox"]:focus + label:before,
			.wrapper.style2 input[type="radio"]:focus + label:before {
				border-color: #fafafa;
				box-shadow: 0 0 0 1px #fafafa;
			}

			.wrapper.style2 ::-webkit-input-placeholder {
				color: #67b2e4 !important;
			}

			.wrapper.style2 :-moz-placeholder {
				color: #67b2e4 !important;
			}

			.wrapper.style2 ::-moz-placeholder {
				color: #67b2e4 !important;
			}

			.wrapper.style2 :-ms-input-placeholder {
				color: #67b2e4 !important;
			}

			.wrapper.style2 .formerize-placeholder {
				color: #67b2e4 !important;
			}

			.wrapper.style2 ul.alt li {
				border-top-color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style2 header p {
				color: #67b2e4;
			}

			.wrapper.style2 table tbody tr {
				border-color: rgba(255, 255, 255, 0.25);
			}

				.wrapper.style2 table tbody tr:nth-child(2n + 1) {
					background-color: rgba(255, 255, 255, 0.075);
				}

			.wrapper.style2 table th {
				color: #fff;
			}

			.wrapper.style2 table thead {
				border-bottom-color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style2 table tfoot {
				border-top-color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style2 table.alt tbody tr td {
				border-color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style2 .image {
				box-shadow: 0px 0px 0px 7px #3498db, 0px 0px 0px 8px rgba(255, 255, 255, 0.25);
			}

		@media screen and (max-width: 1280px) {

			.wrapper > .inner {
				width: 60em;
			}

		}

		@media screen and (max-width: 980px) {

			.wrapper > .inner {
				width: 90%;
			}

		}

		@media screen and (max-width: 736px) {

			.wrapper {
				padding: 3em 0 1em 0;
			}

		}

/* Header */

	body.subpage {
		padding-top: 3.125em;
	}

	@-moz-keyframes reveal-header {
		0% {
			top: -4em;
			opacity: 0;
		}

		100% {
			top: 0;
			opacity: 1;
		}
	}

	@-webkit-keyframes reveal-header {
		0% {
			top: -4em;
			opacity: 0;
		}

		100% {
			top: 0;
			opacity: 1;
		}
	}

	@-ms-keyframes reveal-header {
		0% {
			top: -4em;
			opacity: 0;
		}

		100% {
			top: 0;
			opacity: 1;
		}
	}

	@keyframes reveal-header {
		0% {
			top: -4em;
			opacity: 0;
		}

		100% {
			top: 0;
			opacity: 1;
		}
	}

	#header {
		/*background: rgba(0, 0, 0, 0.75);*/
		color: #aed6f1;
		cursor: default;
		height: 3.25em;
		left: 0;
		line-height: 3.25em;
		position: fixed;
		text-align: right;
		top: 0;
		width: 100%;
		z-index: 10001;
	}

		#header > .logo {
			display: inline-block;
			height: inherit;
			left: 1.25em;
			line-height: inherit;
			margin: 0;
			padding: 0;
			position: absolute;
			top: 0;
		}

			#header > .logo a {
				font-size: 1.25em;
				color: #3498db;
			}

				#header > .logo a:hover {
					color: #3498db;
				}

			#header > .logo span {
				font-weight: 300;
				font-size: .8em;
				color: #FFF;
			}

		#header > a {
			-moz-transition: color 0.2s ease-in-out;
			-webkit-transition: color 0.2s ease-in-out;
			-ms-transition: color 0.2s ease-in-out;
			transition: color 0.2s ease-in-out;
			display: inline-block;
			padding: 0 0.75em;
			color: inherit;
			text-decoration: none;
			color: #FFF;
		}

			#header > a:hover {
				color: #3498db;
			}

			#header > a[href="#menu"] {
				text-decoration: none;
				-webkit-tap-highlight-color: transparent;
			}

				#header > a[href="#menu"]:before {
					content: "";
					-moz-osx-font-smoothing: grayscale;
					-webkit-font-smoothing: antialiased;
					font-family: FontAwesome;
					font-style: normal;
					font-weight: normal;
					text-transform: none !important;
				}

				#header > a[href="#menu"]:before {
					margin: 0 0.5em 0 0;
				}

			#header > a + a[href="#menu"]:last-child {
				border-left: solid 1px rgba(255, 255, 255, 0.25);
				padding-left: 1.25em;
				margin-left: 0.5em;
			}

			#header > a:last-child {
				padding-right: 1.25em;
			}

			@media screen and (max-width: 736px) {

				#header > a {
					padding: 0 0.5em;
				}

					#header > a + a[href="#menu"]:last-child {
						padding-left: 1em;
						margin-left: 0.25em;
					}

					#header > a:last-child {
						padding-right: 1em;
					}

			}

		#header.reveal {
			-moz-animation: reveal-header 0.5s ease;
			-webkit-animation: reveal-header 0.5s ease;
			-ms-animation: reveal-header 0.5s ease;
			animation: reveal-header 0.5s ease;
		}

		#header.alt {
			-moz-animation: none;
			-webkit-animation: none;
			-ms-animation: none;
			animation: none;
			background-color: transparent;
			box-shadow: none;
			overflow: hidden;
			position: absolute;
			top: 1.5em;
		}

			#header.alt h1 {
				left: 2.5em;
			}

			#header.alt nav {
				right: 2.5em;
			}

	@media screen and (max-width: 980px) {

		body.subpage {
			padding-top: 44px;
		}

		#header {
			height: 44px;
			line-height: 44px;
		}

			#header > h1 {
				left: 1em;
			}

				#header > h1 a {
					font-size: 1em;
				}

	}

	@media screen and (max-width: 480px) {

		#header {
			min-width: 320px;
		}

	}

/* Menu */

	#menu {
		-moz-transform: translateX(20em);
		-webkit-transform: translateX(20em);
		-ms-transform: translateX(20em);
		transform: translateX(20em);
		-moz-transition: -moz-transform 0.5s ease, box-shadow 0.5s ease, visibility 0.5s;
		-webkit-transition: -webkit-transform 0.5s ease, box-shadow 0.5s ease, visibility 0.5s;
		-ms-transition: -ms-transform 0.5s ease, box-shadow 0.5s ease, visibility 0.5s;
		transition: transform 0.5s ease, box-shadow 0.5s ease, visibility 0.5s;
		-webkit-overflow-scrolling: touch;
		background: rgba(0, 0, 0, 0.925);
		box-shadow: none;
		color: #fff;
		height: 100%;
		max-width: 80%;
		overflow-y: auto;
		padding: 3em 2em;
		position: fixed;
		right: 0;
		top: 0;
		visibility: hidden;
		width: 20em;
		z-index: 10002;
	}

		#menu > ul {
			margin: 0 0 1em 0;
		}

			#menu > ul.links {
				list-style: none;
				padding: 0;
			}

				#menu > ul.links > li {
					padding: 0;
				}

					#menu > ul.links > li > a:not(.button) {
						border: 0;
						border-top: solid 1px rgba(255, 255, 255, 0.25);
						color: inherit;
						display: block;
						line-height: 3.5em;
						text-decoration: none;
					}

					#menu > ul.links > li > .button {
						display: block;
						margin: 0.5em 0 0 0;
					}

					#menu > ul.links > li:hover {
						color: #3498db;
					}

					#menu > ul.links > li:first-child > a:not(.button) {
						border-top: 0 !important;
					}

		#menu .close {
			text-decoration: none;
			-moz-transition: color 0.2s ease-in-out;
			-webkit-transition: color 0.2s ease-in-out;
			-ms-transition: color 0.2s ease-in-out;
			transition: color 0.2s ease-in-out;
			-webkit-tap-highlight-color: transparent;
			border: 0;
			color: #fff;
			cursor: pointer;
			display: block;
			height: 3.25em;
			line-height: 3.25em;
			padding-right: 1.25em;
			position: absolute;
			right: 0;
			text-align: right;
			top: 0;
			vertical-align: middle;
			width: 7em;
		}

			#menu .close:before {
				content: "";
				-moz-osx-font-smoothing: grayscale;
				-webkit-font-smoothing: antialiased;
				font-family: FontAwesome;
				font-style: normal;
				font-weight: normal;
				text-transform: none !important;
			}

			#menu .close:before {
				font-size: 1.25em;
			}

			#menu .close:hover {
				color: #3498db;
			}

			@media screen and (max-width: 736px) {

				#menu .close {
					height: 4em;
					line-height: 4em;
				}

			}

		#menu.visible {
			-moz-transform: translateX(0);
			-webkit-transform: translateX(0);
			-ms-transform: translateX(0);
			transform: translateX(0);
			box-shadow: 0 0 1.5em 0 rgba(0, 0, 0, 0.2);
			visibility: visible;
		}

		@media screen and (max-width: 736px) {

			#menu {
				padding: 2.5em 1.75em;
			}

		}

/* Banner */

	#banner {
		display: -ms-flexbox;
		-ms-flex-pack: center;
		-ms-flex-align: center;
		padding: 8em 0 6em 0;
		-moz-align-items: center;
		-webkit-align-items: center;
		-ms-align-items: center;
		align-items: center;
		display: -moz-flex;
		display: -webkit-flex;
		display: -ms-flex;
		display: flex;
		-moz-justify-content: center;
		-webkit-justify-content: center;
		-ms-justify-content: center;
		justify-content: center;
		background-image: url("banner.jpg");
		background-position: center;
		background-size: cover;
		background-repeat: no-repeat;
		border-top: 0;
		min-height: 100vh;
		height: 100vh !important;
		position: relative;
		text-align: center;
		overflow: hidden;
	}

		#banner .inner {
			-moz-transform: scale(1.0);
			-webkit-transform: scale(1.0);
			-ms-transform: scale(1.0);
			transform: scale(1.0);
			-moz-transition: opacity 1s ease, -moz-transform 1s ease;
			-webkit-transition: opacity 1s ease, -webkit-transform 1s ease;
			-ms-transition: opacity 1s ease, -ms-transform 1s ease;
			transition: opacity 1s ease, transform 1s ease;
			opacity: 1;
			position: relative;
			z-index: 2;
		}

		#banner h1 {
			font-size: 4em;
			margin-bottom: .25em;
			color: #FFF;
		}

		#banner p {
			color: rgba(255, 255, 255, 0.85);
			font-size: 1.75em;
		}

	@-moz-keyframes more {
		0% {
			bottom: -3em;
		}

		100% {
			bottom: 0;
		}
	}

	@-webkit-keyframes more {
		0% {
			bottom: -3em;
		}

		100% {
			bottom: 0;
		}
	}

	@-ms-keyframes more {
		0% {
			bottom: -3em;
		}

		100% {
			bottom: 0;
		}
	}

	@keyframes more {
		0% {
			bottom: -3em;
		}

		100% {
			bottom: 0;
		}
	}

		#banner:before {
			-moz-transition: opacity 3s ease;
			-webkit-transition: opacity 3s ease;
			-ms-transition: opacity 3s ease;
			transition: opacity 3s ease;
			-moz-transition-delay: 1.25s;
			-webkit-transition-delay: 1.25s;
			-ms-transition-delay: 1.25s;
			transition-delay: 1.25s;
			content: '';
			display: block;
			background-color: #000;
			height: 100%;
			left: 0;
			opacity: 0.65;
			position: absolute;
			top: 0;
			width: 100%;
			z-index: 1;
		}

		@media screen and (max-width: 980px) {

			#banner {
				font-size: .85em;
			}

				#banner br {
					display: none;
				}

		}

		@media screen and (max-width: 736px) {

			#banner {
				min-height: 0;
				padding: 8em 2em 4em 2em;
			}

				#banner .inner {
					width: 100%;
				}

				#banner h1 {
					font-size: 1.75em;
					margin-bottom: 0.5em;
					padding-bottom: 0;
				}

				#banner p {
					font-size: 1.25em;
				}

				#banner .button {
					width: 100%;
				}

		}

		@media screen and (max-width: 480px) {

			#banner p {
				font-size: 1em;
			}

		}

		body.is-loading #banner .inner {
			-moz-transform: scale(0.99);
			-webkit-transform: scale(0.99);
			-ms-transform: scale(0.99);
			transform: scale(0.99);
			opacity: 0;
		}

		body.is-loading #banner:before {
			opacity: 1;
		}

/* Footer */

	#footer {
		padding: 6em 2em 4em 2em;
	}

		#footer > .inner {
			margin: 0 auto;
			width: 80em;
		}

		#footer .copyright {
			color: #bfbfbf;
			font-size: 0.9em;
			margin: 0 0 2em 0;
			padding: 0;
			text-align: center;
		}

			#footer .copyright .icons a {
				border-radius: 100%;
				box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.1), 0px 0px 0px 4px #fff, 0px 0px 0px 5px rgba(0, 0, 0, 0.1);
				display: block;
				font-size: 1em;
				height: 3em;
				line-height: 3em;
				margin: 0 auto 0.7em;
				text-align: center;
				width: 3em;
			}

		@media screen and (max-width: 1280px) {

			#footer > .inner {
				width: 65em;
			}

		}

		@media screen and (max-width: 980px) {

			#footer > .inner {
				width: 90%;
			}

		}

		@media screen and (max-width: 736px) {

			#footer {
				padding: 3em 1em 1em 1em;
			}

		}
		</style>
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="sac.jpg">Sachin <span>by TEMPLATED</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="generic.html">Generic</a></li>
					<li><a href="elements.html">Elements</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>This is Sachin</h1>
						<p>Aliquam libero augue varius non odio nec faucibus congue<br />felis quisque a diam rutrum tempus massa accumsan faucibus purus.</p>
					</header>
					<a href="#main" class="button big scrolly">Learn More</a>
				</div>
			</section>

		<!-- Main -->
			<div id="main">

				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<!-- 2 Columns -->
								<div class="flex flex-2">
									<div class="col col1">
										<div class="image round fit">
											<a href="generic.html" class="link"><img src="images/pic01.jpg" alt="" /></a>
										</div>
									</div>
									<div class="col col2">
										<h3>Maecenas a gravida quam</h3>
										<p>Etiam posuere hendrerit arcu, ac blandit nulla. Sed congue malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet, enim magna cursus auctor lacinia nunc ex blandit augue. Ut vitae neque fermentum, luctus elit fermentum, porta augue. Nullam ultricies, turpis at fermentum iaculis, nunc justo dictum dui, non aliquet erat nibh non ex.</p>
										<p>Sed congue malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet, enim magna cursus auctor lacinia nunc ex blandit augue. Ut vitae neque fermentum, luctus elit fermentum, porta augue. Nullam ultricies, turpis at fermentum iaculis, nunc justo dictum dui, non aliquet erat nibh non ex. </p>
										<a href="#" class="button">Learn More</a>
									</div>
								</div>
						</div>
					</section>

				<!-- Section -->
					<section class="wrapper style2">
						<div class="inner">
							<div class="flex flex-2">
								<div class="col col2">
									<h3>Suspendisse quis massa vel justo</h3>
									<p>Etiam posuere hendrerit arcu, ac blandit nulla. Sed congue malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet, enim magna cursus auctor lacinia nunc ex blandit augue. Ut vitae neque fermentum, luctus elit fermentum, porta augue. Nullam ultricies, turpis at fermentum iaculis, nunc justo dictum dui, non aliquet erat nibh non ex.</p>
									<p>Sed congue malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet, enim magna cursus auctor lacinia nunc ex blandit augue. Ut vitae neque fermentum, luctus elit fermentum, porta augue. Nullam ultricies, turpis at fermentum iaculis, nunc justo dictum dui, non aliquet erat nibh non ex. </p>
									<a href="#" class="button">Learn More</a>
								</div>
								<div class="col col1 first">
									<div class="image round fit">
										<a href="generic.html" class="link"><img src="images/pic02.jpg" alt="" /></a>
									</div>
								</div>
							</div>
						</div>
					</section>

				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<header class="align-center">
								<h2>Aliquam ipsum purus dolor</h2>
								<p>Cras sagittis turpis sit amet est tempus, sit amet consectetur purus tincidunt.</p>
							</header>
							<div class="flex flex-3">
								<div class="col align-center">
									<div class="image round fit">
										<img src="images/pic03.jpg" alt="" />
									</div>
									<p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet. </p>
									<a href="#" class="button">Learn More</a>
								</div>
								<div class="col align-center">
									<div class="image round fit">
										<img src="images/pic05.jpg" alt="" />
									</div>
									<p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet. </p>
									<a href="#" class="button">Learn More</a>
								</div>
								<div class="col align-center">
									<div class="image round fit">
										<img src="images/pic04.jpg" alt="" />
									</div>
									<p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet. </p>
									<a href="#" class="button">Learn More</a>
								</div>
							</div>
						</div>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer">
				<div class="copyright">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-snapchat"><span class="label">Snapchat</span></a></li>
					</ul>
					<p>&copy; Untitled. All rights reserved. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.</p>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
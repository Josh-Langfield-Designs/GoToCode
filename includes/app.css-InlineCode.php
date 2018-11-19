<style>
	body {
		background-color: #fff;
		font-family: 'Roboto', sans-serif;
		max-width: 100%!important;
		overflow-x: hidden!important
	}
	
	.grid-container {
		max-width: 85rem
	}
	
	h1,
	.h1,
	h2,
	.h2,
	h3,
	.h3,
	h4,
	.h4,
	h5,
	.h5,
	h6,
	.h6 {
		font-family: 'Roboto', sans-serif
	}
	
	.float-left {
		padding: 0 2rem 0 0
	}
	
	.float-right {
		padding: 0 0 0 2rem
	}
	
	@media screen and (max-width:39.9375em) {
		.float-right,
		.float-left {
			float: none!important
		}
	}
	
	video#bgvid {
		position: absolute;
		min-width: 100%;
		min-height: 100%;
		z-index: -100;
		right: 0;
		left: 50%;
		top: 50%;
		transform: translate(-50%, -50%)
	}
	
	@media only screen and (max-width:63.9375em) {
		video#bgvid {
			display: none
		}
	}
	
	@media screen and (-webkit-min-device-pixel-ratio:0) {
		video#bgvid {
			z-index: -1
		}
	}
	
	div#mc_embed_signup {
		padding: 5px;
		margin: 20px 0 20px 0;
		width: 100%;
		background-color: #fff;
		border-radius: 3px;
		font-size: 14px!important
	}
	
	.asterisk {
		color: #334142!important
	}
	
	div#mc_embed_signup input {
		color: #000;
		width: 200px;
		padding: 6px;
		border-radius: 3px;
		font-size: 14px
	}
	
	table.formBox tr th {
		padding: 0;
		vertical-align: middle;
		font-size: 14px;
		color: #ffffff!important
	}
	
	#hiddenNews {
		display: none;
		visibility: hidden
	}
	
	.contactForm ul {
		list-style-type: none;
	}
	
	.contactForm label {
		color: #2e2e2e;
		font-family: 'Roboto', sans-serif;
	}
	
	.contactForm #reqInfo {
		color: #2e2e2e !important;
		font-family: 'Roboto', sans-serif;
		margin: -.5rem 0 1rem 0;
	}
	
	.contactForm.Small label {
		color: #ffffff;
	}
	
	.contactForm.Small #reqInfo {
		color: #ffffff;
	}
	
	.cognito select {
		background-image: none;
	}
	
	.header1 {
		background-color: #fff;
		width: 100%;
		position: relative;
		z-index: 9;
		transition: all 0.25s ease-out;
		-webkit-transition: all 0.25s ease-out;
		padding: 1rem 0 0 0
	}
	
	.header1 hr {
		margin: .5rem auto;
		max-width: 80%;
		border-bottom: 1px solid #fff
	}
	
	.header1 p {
		margin: 0;
		color: #2e2e2e;
		font-weight: 400;
		font-size: 1.099rem;
		font-family: 'Roboto', sans-serif
	}
	
	.header1 h2 {
		color: #969696;
		font-family: 'Roboto', sans-serif;
		font-size: 1.399rem!important;
		font-weight: 400;
		margin: 1rem 0!important
	}
	
	@media only screen and (max-width:40em) {
		.header1 h2 {
			margin: 1rem 0 0 0;
			font-size: 1.999rem!important
		}
	}
	
	.header1 h3 {
		color: #2e2e2e;
		font-weight: 400;
		font-size: 1.099rem;
		font-family: 'Roboto', sans-serif
	}
	
	.header1 h4 {
		font-family: 'Roboto', sans-serif;
		font-weight: 400
	}
	
	.header1 h5 {
		color: #969696;
		font-family: 'Roboto', sans-serif
	}
	
	.header1 a:link,
	.header1 a:visited {
		text-decoration: none;
		color: #969696;
		transition: all 0.25s ease-in-out
	}
	
	.header1 a:hover {
		text-decoration: none;
		color: #969696
	}
	
	.header1 i {
		color: #707070;
		font-size: 1.599rem!important;
		transition: all 0.25s ease-in-out
	}
	
	.header1 a:hover i {
		color: #2e2e2e!important;
		text-shadow: none
	}
	
	.header1 img {
		margin: 1rem 0
	}
	
	.skip-nav {
		margin-top: -1rem
	}
	
	@media only screen and (max-width:63.9375em) {
		.skip-nav {
			margin-top: -2rem
		}
	}
	
	.header3 {
		background-color: #ccc;
		padding: 1rem 0 .5rem 0
	}
	
	.header2 {
		padding: 7rem 0;
		width: 100%;
		position: relative;
		z-index: 5
	}
	
	@media only screen and (max-width:63.9375em) {
		.header2 {
			background-image: url(./images/pageLayout/bg-main.jpg);
			background-repeat: no-repeat;
			background-position: 50% top;
			background-size: cover
		}
	}
	
	.header2-inside {
		padding: 7rem 0;
		width: 100%;
		position: relative;
		z-index: 5;
		background-image: url(./images/pageLayout/bg-main.jpg);
		background-repeat: no-repeat;
		background-position: 50% 60%;
		background-size: cover
	}
	
	@media only screen and (max-width:63.9375em) {
		.header2-inside {
			padding: 5rem 0
		}
	}
	
	.header2 p {
		color: #fff
	}
	
	.header2 h2 {
		color: #2e2e2e;
		font-weight: 600;
		font-size: 2.699rem;
		font-family: 'Roboto', sans-serif
	}
	
	@media screen and (max-width:39.9375em) {
		.header2 h2 {
			font-size: 1.899rem
		}
	}
	
	.header2 h3 {
		color: #fff;
		font-size: 2.199rem;
		font-family: 'Roboto', sans-serif
	}
	
	.header2 h5 {
		color: #fff;
		font-weight: 600;
		text-shadow: 0 0 5px rgba(0, 0, 0, 1)
	}
	
	.header2 a:link {
		text-decoration: none;
		color: #335467
	}
	
	.header2 a:visited {
		text-decoration: none;
		color: #335467
	}
	
	.header2 a:hover {
		text-decoration: none;
		color: #335467
	}
	
	.header2 .button {
		margin-top: 8rem
	}
	
	span.line {
		display: inline-block;
		width: 100%;
		height: 1px;
		background: #a1a3a4
	}
	
	span.lines {
		display: inline-block;
		background: #335467;
		width: 5px;
		height: 20px;
		vertical-align: sub;
		position: relative
	}
	
	span.lines:before {
		position: absolute;
		content: '';
		height: 15px;
		width: 1px;
		background: #335467;
		left: -10px;
		top: 3px
	}
	
	span.lines:after {
		position: absolute;
		content: '';
		height: 15px;
		width: 1px;
		background: #335467;
		right: -10px;
		top: 3px
	}
	
	.callToAction {
		background-color: #fff;
		padding: 4rem 0 2rem 0
	}
	
	.callToAction h2 {
		margin: 1rem 0 2.5rem 0
	}
	
	.callToAction a:link,
	.callToAction a h2,
	.callToAction a:visited h2 {
		font-size: 1.299rem;
		font-family: 'Roboto', sans-serif!important;
		text-decoration: none!important;
		color: #707070
	}
	
	.callToAction a:hover {
		color: #969696
	}
	
	.callToAction i {
		font-size: 3.299rem;
		color: #707070;
		transition: all 0.25s ease-out
	}
	
	.callToAction a:hover i {
		color: #ccc
	}
	
	.callToAction2 {
		background-color: #fff;
		padding: 4rem 0 2rem 0
	}
	
	.callToAction2 a:link,
	.callToAction2 a h2,
	.callToAction2 a:visited h2 {
		font-size: 1.499rem;
		font-family: 'Roboto', sans-serif;
		text-decoration: none!important;
		color: #fff;
		line-height: 2rem
	}
	
	.callToAction2 a:link small,
	.callToAction2 a h2 small,
	.callToAction2 a:visited h2 small {
		color: #fff;
		font-size: 1.099rem
	}
	
	.callToAction2 a:hover {
		color: #969696
	}
	
	.callToAction2 i {
		font-size: 2.299rem;
		color: #707070;
		opacity: 0;
		transition: all 0.25s ease-out;
		margin-top: 2rem
	}
	
	.callToAction2 a:hover i {
		color: #969696;
		opacity: 1
	}
	
	.practiceAreasCTA3 {
		background-color: #fff;
		padding: 4rem 0 2rem 0
	}
	
	.practiceAreasCTA3 h2 {
		margin: 1rem 0
	}
	
	.practiceAreasCTA3 a:link,
	.practiceAreasCTA3 a h2,
	.practiceAreasCTA3 a:visited h2 {
		font-size: 1.299rem;
		font-family: 'Roboto', sans-serif!important;
		text-decoration: none!important;
		color: #707070
	}
	
	.practiceAreasCTA3 a:hover {
		color: #969696
	}
	
	.practiceAreasCTA3 i {
		background: rgba(150, 150, 150, 1);
		background: -moz-radial-gradient(center, ellipse cover, rgba(150, 150, 150, 1) 0%, rgba(112, 112, 112, 1) 100%);
		background: -webkit-gradient(radial, center center, 0, center center, 100%, color-stop(0%, rgba(150, 150, 150, 1)), color-stop(100%, rgba(112, 112, 112, 1)));
		background: -webkit-radial-gradient(center, ellipse cover, rgba(150, 150, 150, 1) 0%, rgba(112, 112, 112, 1) 100%);
		background: -o-radial-gradient(center, ellipse cover, rgba(150, 150, 150, 1) 0%, rgba(112, 112, 112, 1) 100%);
		background: -ms-radial-gradient(center, ellipse cover, rgba(150, 150, 150, 1) 0%, rgba(112, 112, 112, 1) 100%);
		background: radial-gradient(ellipse at center, rgba(150, 150, 150, 1) 0%, rgba(112, 112, 112, 1) 100%);
		/*filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#969696', endColorstr='#707070', GradientType=1);*/
		font-size: 3.299rem;
		color: #fff;
		transition: all 0.25s ease-out;
		width: 150px;
		height: 150px;
		border-radius: 50%;
		padding-top: 45px
	}
	
	.practiceAreasCTA3 a:hover i {
		color: #ccc
	}
	
	.footerNav {
		margin: 2rem auto;
	}
	
	.horizontal-nav {
		background-color: #2e2e2e;
		position: relative;
		z-index: 100
	}
	
	@media only screen and (max-width:39.9375em) {
		.horizontal-nav {
			padding: 0
		}
	}
	
	.horizontal-nav hr {
		max-width: 80%;
		border-bottom: 1px solid #707070;
		margin-top: -4px
	}
	
	@media screen and (max-width:39.9375em) {
		.horizontal-nav hr {
			display: none
		}
	}
	
	.vertical .menu {
		transition: all 0.25s ease-out
	}
	
	.horizontal-nav ul li {
		font-size: 1.099rem;
		font-family: 'Roboto', sans-serif;
		padding: 0 1rem;
		text-transform: uppercase;
		text-align: center
	}
	
	@media only screen and (max-width:83.9375em) {
		.horizontal-nav ul li {
			padding: 0;
			text-align: left!important
		}
	}
	
	.horizontal-nav ul li a:link {
		transition: all 0.25s ease-in-out
	}
	
	.horizontal-nav a:link,
	.horizontal-nav a:visited {
		color: #ccc;
		font-weight: 400;
		padding: 1rem
	}
	
	@media only screen and (max-width:63.9375em) {
		.horizontal-nav a:link,
		.horizontal-nav a:visited {
			color: #fff
		}
	}
	
	.horizontal-nav a:hover {
		text-decoration: none;
		color: #ffffff!important;
		background-color: #707070!important
	}
	
	.dropdown.menu .is-active>a {
		color: #fff;
		background-color: #707070
	}
	
	.horizontal-nav ul li ul li {
		font-size: .859rem;
		font-family: 'Roboto', sans-serif;
		font-style: normal;
		font-weight: 400;
		padding: 0;
		text-align: left!important
	}
	
	.horizontal-nav ul li ul li a:link {
		line-height: 1.2rem
	}
	
	.top-bar {
		padding: 0
	}
	
	.top-bar,
	.top-bar ul {
		background-color: transparent
	}
	
	.drilldown a {
		background: #2e2e2e!important
	}
	
	.drilldown .is-drilldown-submenu {
		background: #2e2e2e
	}
	
	@media only screen and (max-width:63.9375em) {
		.is-drilldown {
			width: 250px
		}
	}
	
	@media only screen and (max-width:63.9375em) {
		.top-bar,
		.top-bar ul {
			background-color: #2e2e2e
		}
	}
	
	.top-bar li>a,
	.top-bar ul li>a {
		color: #fff;
		font-weight: 400
	}
	
	.dropdown.menu .submenu {
		background-color: #2e2e2e;
		border: none;
		box-shadow: 0 20px 20px -15px rgba(0, 0, 0, .95)
	}
	
	.dropdown.menu .submenu a:link,
	.dropdown.menu .submenu a:visited {
		color: #fff
	}
	
	.dropdown.menu .submenu a:hover,
	.dropdown.menu .submenu a:hover {
		color: #fff
	}
	
	.menu-icon::after {
		background: #fff;
		box-shadow: 0 7px 0 #ffffff, 0 14px 0 #fff
	}
	
	.menu-icon:hover::after {
		background: #fff;
		box-shadow: 0 7px 0 #ffffff, 0 14px 0 #fff
	}
	
	.title-bar {
		background: transparent;
		color: #fff
	}
	
	.title-bar-title {
		vertical-align: middle;
		display: inline-block;
		font-size: 1.399rem;
		font-family: 'Roboto', sans-serif
	}
	
	.dropdown.menu.medium-horizontal>li.is-dropdown-submenu-parent>a::after {
		border-color: #fff transparent transparent
	}
	
	.drilldown .js-drilldown-back>a::before {
		border-color: transparent #fff transparent transparent
	}
	
	.drilldown .is-drilldown-submenu-parent>a::after {
		border-color: transparent transparent transparent #fff
	}
	
	.dropdown.menu.large-horizontal>li.is-dropdown-submenu-parent>a::after {
		border-color: #fff transparent transparent
	}
	
	.menu.nested {
		margin-left: 0
	}
	
	.sticky.is-stuck {
		box-shadow: 0 0 20px rgba(0, 0, 0, .5)
	}
	
	blockquote {
		margin: 3rem 0;
		padding: .5625rem 1.25rem 0 1.1875rem;
		border-left: 6px solid #969696;
	}
	
	blockquote,
	blockquote p {
		font-size: 1.039rem;
		line-height: 1.8rem;
		color: #2e2e2e;
		padding: 0 .5rem;
	}
	
	cite {
		display: block;
		font-size: 1.2125rem;
		color: #2e2e2e
	}
	
	cite:before {
		content: "— "
	}
	
	.bodySection {
		background: #fff;
		padding: 2rem 0 4rem 0;
		position: relative;
		z-index: 98
	}
	
	.bodySection img.alt {
		border-radius: 50%
	}
	
	.bodySection hr {
		border-bottom: 1px solid #969696;
		margin: 0 auto 15px auto;
		width: 100%
	}
	
	.bodySection p,
	.bodySection ul li,
	.bodySection ol li {
		color: #2e2e2e;
		font-size: 1.039rem;
		font-weight: 400;
		font-family: 'Roboto', sans-serif;
		margin: 10px 0
	}
	
	.bodySection h1 {
		color: #969696;
		font-family: 'Roboto', sans-serif;
		font-weight: 400;
		font-size: 2.299rem!important;
		margin: 0 0 10px 0
	}
	
	@media screen and (max-width:39.9375em) {
		.bodySection h1 {
			font-size: 1.899rem!important
		}
	}
	
	.bodySection h2 {
		color: #969696;
		font-family: 'Roboto', sans-serif;
		font-weight: 400;
		font-size: 1.599rem;
		margin: 10px 0
	}
	
	.bodySection h3 {
		color: #969696;
		font-family: 'Roboto', sans-serif;
		font-weight: 400;
		font-size: 1.399rem;
		margin: 10px 0
	}
	
	.bodySection h4 {
		color: #969696;
		font-family: 'Roboto', sans-serif;
		font-weight: 400;
		font-size: 1.399rem;
		margin: 10px 0
	}
	
	.bodySection h5,
	.bodySection h6 {
		color: #969696;
		font-family: 'Roboto', sans-serif;
		font-weight: 400;
		font-size: 1.399rem;
		margin: 10px 0
	}
	
	.bodySection a,
	.bodySection a:visited {
		color: #969696;
		text-decoration: underline;
		transition: all 0.25s ease-in-out
	}
	
	.bodySection a:hover,
	.bodySection a:focus {
		color: #707070;
		text-decoration: underline
	}
	
	.SEOandCopyright {
		position: relative;
		z-index: 9
	}
	
	.SEOandCopyright p {
		font-size: 0.8rem!important;
		font-family: 'Roboto', sans-serif;
		color: #969696!important;
		margin-top: 2rem
	}
	
	.SEOandCopyright.custom {
		background-color: #fff
	}
	
	.SEOandCopyright.custom p {
		font-size: 0.8rem!important;
		font-family: 'Roboto', sans-serif;
		color: #888888!important
	}
	
	.newsletterSection {
		background-color: #707070;
		padding: 5rem 0 4rem 0;
		position: relative;
		z-index: 1
	}
	
	@media screen and (max-width:39.9375em) {
		.newsletterSection .button {
			margin: 2rem 0 0 0
		}
	}
	
	.newsletterSection h2 {
		font-family: 'Roboto', sans-serif;
		color: #fff;
		font-size: 2.399rem
	}
	
	@media screen and (max-width:39.9375em) {
		.newsletterSection h2 {
			font-size: 1.899rem!important
		}
	}
	
	.footerSection {
		background-color: #2e2e2e;
		color: #fff;
		padding: 4rem 0 2rem 0;
		position: relative;
		z-index: 1
	}
	
	@media screen and (max-width:83.9375em) {
		.footerSection ul {
			column-count: 3;
			column-gap: 4rem;
			display: inline-block
		}
	}
	
	@media screen and (max-width:39.9375em) {
		.footerSection ul {
			column-count: 1;
			column-gap: 4rem;
			display: inline-block
		}
	}
	
	.footerSection .listColumns ul li {
		text-align: center
	}
	
	.footerSection li p {
		color: #fff;
		font-weight: 400;
		text-transform: uppercase;
		font-size: 0.999rem;
		font-family: 'Roboto', sans-serif
	}
	
	.footerSection h2 {
		color: #fff;
		font-weight: 400;
		font-size: .899rem;
		margin: 1rem 0 0 0;
		line-height: 1.5rem;
		font-family: 'Roboto', sans-serif
	}
	
	.footerSection h3 {
		color: #fff;
		font-weight: 600;
		font-size: 1.499rem!important;
		margin: 2rem 0;
		font-family: 'Roboto', sans-serif
	}
	
	.footerSection h4 {
		font-weight: 600;
		font-size: 1.799rem;
		margin: 1rem 0 0 0;
		font-family: 'Roboto', sans-serif
	}
	
	.footerSection h5 {
		color: #4c4c4c;
		font-weight: 400;
		font-size: 1.499rem;
		margin: 0;
		font-family: 'Roboto', sans-serif
	}
	
	.footerSection h6 {
		color: #4c4c4c;
		font-weight: 600;
		font-size: 1.499rem;
		margin: 1rem 0 0 0;
		font-family: 'Roboto', sans-serif
	}
	
	.footerSection a,
	.footerSection a:visited {
		color: #fff;
		transition: all 0.25s ease-out
	}
	
	.footerSection a:hover,
	.footerSection a:focus {
		color: #969696;
		text-decoration: none
	}
	
	.footerSection img.alt {
		margin: 2rem 0
	}
	
	@media screen and (max-width:39.9375em) {
		.footerSection img.alt2 {
			margin: 2rem 0
		}
	}
	
	.footerSection i {
		color: #969696;
		font-size: 1.999rem;
		margin-top: 1rem
	}
	
	.footerSection a i:hover {
		color: #969696
	}
	
	@media screen and (max-width:73.9375em) {
		.footerSection i {
			font-size: 1.399rem!important
		}
	}
	
	.memberLogoSection {
		background-color: #fff;
		padding: 5rem 0 3rem 0
	}
	
	.memberLogoSection table tbody,
	.memberLogoSection table tr {
		background-color: initial !important;
	}
	
	.memberLogoSection .large_super_lawyers_badge {
		margin: auto;
	}
	
	.callout1 {
		padding: 1rem;
		border: none;
		border-radius: 0;
		background-image: url(./images/pageLayout/CTA-Blog.jpg);
		background-position: center center;
		background-size: cover;
		background-repeat: no-repeat
	}
	
	.callout1:hover {
		box-shadow: 0 0 10px rgba(0, 0, 0, .2)
	}
	
	.callout2 {
		padding: 1rem;
		border: none;
		border-radius: 0;
		background-image: url(./images/pageLayout/CTA-News.jpg);
		background-position: center center;
		background-size: cover;
		background-repeat: no-repeat
	}
	
	.callout2:hover {
		box-shadow: 0 0 10px rgba(0, 0, 0, .2)
	}
	
	.callout3 {
		padding: 1rem;
		border: none;
		border-radius: 0;
		background-image: url(./images/pageLayout/CTA-Consultation.jpg);
		background-position: center center;
		background-size: cover;
		background-repeat: no-repeat
	}
	
	.callout3:hover {
		box-shadow: 0 0 10px rgba(0, 0, 0, .2)
	}
	
	.callout4 {
		padding: 2rem 4rem;
		border: none;
		border-radius: 0;
		background-color: #fff;
		box-shadow: 0 0 10px rgba(0, 0, 0, .2)
	}
	
	.cd-top {
		display: inline-block;
		height: 40px;
		width: 40px;
		position: fixed;
		bottom: 40px;
		right: 10px;
		box-shadow: 0 0 10px rgba(0, 0, 0, .2);
		overflow: hidden;
		text-indent: 100%;
		white-space: nowrap;
		background: rgba(0, 0, 0, .3) url(./images/pageLayout/cd-top-arrow.png) no-repeat center 50%;
		visibility: hidden;
		opacity: 0;
		-webkit-transition: opacity .3s 0s, visibility 0s .3s;
		-moz-transition: opacity .3s 0s, visibility 0s .3s;
		transition: opacity .3s 0s, visibility 0s .3s;
		z-index: 999
	}
	
	.cd-top.cd-is-visible,
	.cd-top.cd-fade-out,
	.no-touch .cd-top:hover {
		-webkit-transition: opacity .3s 0s, visibility 0s 0s;
		-moz-transition: opacity .3s 0s, visibility 0s 0s;
		transition: opacity .3s 0s, visibility 0s 0s
	}
	
	.cd-top.cd-is-visible {
		visibility: visible;
		opacity: 1
	}
	
	.cd-top.cd-fade-out {
		opacity: .5
	}
	
	.no-touch .cd-top:hover {
		background-color: #000;
		opacity: 1
	}
	
	@media only screen and (min-width:768px) {
		.cd-top {
			right: 20px;
			bottom: 20px
		}
	}
	
	@media only screen and (min-width:1024px) {
		.cd-top {
			height: 60px;
			width: 60px;
			right: 30px;
			bottom: 30px
		}
	}
	
	.button {
		display: inline-block;
		text-align: center;
		line-height: 2rem;
		cursor: pointer;
		-webkit-appearance: none;
		transition: all 0.25s ease-out;
		vertical-align: middle;
		border: none;
		text-transform: uppercase;
		border-radius: 0;
		-webkit-background-clip: padding-box;
		background-clip: padding-box;
		padding: .3rem 1rem!important;
		margin: 0;
		font-family: 'Roboto', sans-serif;
		font-weight: 500!important;
		font-size: 1.099rem;
		background: #969696;
		color: #ffffff!important;
		text-decoration: none!important
	}
	
	[data-whatinput='mouse'] .button {
		outline: 0
	}
	
	.button:hover,
	.button:focus {
		background-color: #2e2e2e!important;
		color: #fff;
		text-decoration: none!important
	}
	
	.button2 {
		display: inline-block;
		text-align: center;
		line-height: 1.5rem;
		cursor: pointer;
		-webkit-appearance: none;
		transition: all 0.25s ease-out;
		vertical-align: middle;
		border: none;
		text-transform: uppercase;
		border-radius: 0;
		-webkit-background-clip: padding-box;
		background-clip: padding-box;
		padding: 1.5rem 1rem!important;
		margin: 0;
		font-family: 'Roboto', sans-serif;
		font-weight: 600!important;
		font-size: 1.399rem;
		background: #969696;
		color: #969696!important;
		text-decoration: none!important
	}
	
	[data-whatinput='mouse'] .button2 {
		outline: 0
	}
	
	.button2:hover,
	.button2:focus {
		background-color: #969696!important;
		color: #969696;
		text-decoration: none!important
	}
	
	.contactSection {
		background-color: #707070;
		padding: 4rem 0;
		position: relative;
		z-index: 9
	}
	
	.contactSection h2 {
		color: #fff;
		font-weight: 400;
		font-family: 'Roboto', sans-serif
	}
	
	.contactSection p {
		color: #fff;
		font-weight: 400;
		font-size: 1.299rem;
		font-family: 'Roboto', sans-serif
	}
	
	.contactSection p strong {
		font-weight: 400;
		font-size: 1.899rem!important
	}
	
	.contactSection i.alt {
		color: #fff;
		font-weight: 400;
		font-size: 2.099rem!important
	}
	
	.contactSection img {
		margin-bottom: 2rem
	}
	
	.contactSection a,
	.contactSection a:visited {
		color: #fff;
		transition: all 0.25s ease-out
	}
	
	.contactSection a:hover,
	.contactSection a:focus {
		color: #ffffff;
		text-decoration: underline
	}
	
	.testimonialSection {
		padding: 5rem 0 0 0;
		min-height: 550px;
		position: relative;
		z-index: 3
	}
	
	.testimonialSection img {
		max-height: 50px
	}
	
	.testimonialSection p {
		color: #707070;
		font-size: 1.199rem;
		font-family: 'Roboto', sans-serif;
		font-weight: 400;
		margin: 2rem 0
	}
	
	.testimonialSection h2 {
		color: #ccc;
		font-size: 1.299rem;
		font-family: 'Roboto', sans-serif;
		font-weight: 300;
		border-bottom: 2px solid #969696;
		width: 120px;
		margin: auto auto 1.5rem auto;
		padding: 0 0 .5rem 0
	}
	
	.testimonialSection i {
		color: #969696;
		font-size: 2.899rem
	}
	
	.testimonialSection a:link,
	.testimonialSection a:visited {
		text-decoration: none;
		color: #ccc
	}
	
	.testimonialSection a:hover {
		text-decoration: underline;
		color: #ccc
	}
	
	.socialSection {
		background-color: #707070;
		padding: 4rem 0;
		position: relative;
		z-index: 98
	}
	
	.socialSection img {
		max-height: 50px
	}
	
	.socialSection p {
		color: #fff;
		font-size: 1.199rem;
		font-family: 'Roboto', sans-serif;
		font-weight: 400;
		margin: 2rem 0
	}
	
	.socialSection h2 {
		color: #ccc;
		font-size: 2.299rem;
		font-family: 'Roboto', sans-serif;
		font-weight: 600
	}
	
	.socialSection i {
		color: #969696;
		transition: all 0.25s ease-in-out;
		margin: 1rem 0;
		font-size: 2.299rem
	}
	
	.socialSection a:hover i {
		color: #fff
	}
	
	.socialSection a:link,
	.socialSection a:visited {
		text-decoration: none;
		color: #ccc
	}
	
	.socialSection a:hover {
		text-decoration: underline;
		color: #ccc
	}
	
	.followUs {
		text-align: center
	}
	
	.followUs h2 {
		color: #2e2e2e;
		font-weight: 400;
		font-size: 1.299rem!important;
		margin-top: 0;
		font-family: 'Roboto', sans-serif;
		text-transform: none
	}
	
	.followUs .dropdown-pane {
		background-color: #cccccc!important;
		border: none;
		box-shadow: 0 30px 30px -30px rgba(0, 0, 0, .95);
		z-index: 9999
	}
	
	.followUs i {
		font-size: 1.899rem;
		color: #2e2e2e
	}
	
	.followUs a:hover i {
		color: #ffffff!important
	}
	
	.followUs a:hover {
		background-color: transparent
	}
	
	.twitterWrap {
		border: 1px solid #e9ebee;
		background-color: #fff;
		max-width: 500px;
		margin: auto;
		padding: 0
	}
	
	.slick-prev,
	.slick-next {
		top: 35%;
		width: 40px!important;
		height: 40px!important
	}
	
	.slick-prev:before,
	.slick-next:before {
		font-size: 2rem!important;
		opacity: .75;
		color: #cccccc!important
	}
	
	.slick-prev {
		left: -60px!important
	}
	
	[dir='rtl'] .slick-prev {
		right: -25px;
		left: auto
	}
	
	.slick-next {
		right: -53px!important
	}
	
	[dir='rtl'] .slick-next {
		right: auto;
		left: -25px
	}
	
	.slick-dots li button:before {
		color: #cccccc!important;
		font-size: 1rem!important
	}
	
	.practiceAreasCTA1 {
		background: #707070;
		padding: 1rem 0 3rem 0;
		position: relative;
		z-index: 4
	}
	
	.practiceAreasCTA2 {
		background: #fff;
		padding: 4rem 0 1rem 0;
		position: relative;
		z-index: 4
	}
	
	.practiceAreasCTA2 .container {
		padding: 0;
		border: none;
		border-radius: 0;
		box-shadow: 0 0 10px rgba(0, 0, 0, .2);
		position: relative;
		max-width: 300px;
		margin: auto
	}
	
	.practiceAreasCTA2 .container i {
		font-size: 2.099rem;
		width: 60px;
		height: 60px;
		color: #fff;
		position: absolute;
		top: 9rem;
		left: 1.5rem;
		background-color: #707070;
		border-radius: 50%;
		padding: .7rem;
		box-shadow: 0 0 5px rgba(0, 0, 0, .2)
	}
	
	.practiceAreasCTA2 img {
		-webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0 82%);
		clip-path: polygon(0 0, 100% 0, 100% 100%, 0 82%)
	}
	
	.practiceAreasCTA2 hr {
		max-width: 200px;
		border-bottom: 2px solid #707070;
		margin: .5rem auto
	}
	
	.practiceAreasCTA2 a,
	.practiceAreasCTA2 a:visited {
		color: #707070
	}
	
	.practiceAreasCTA2 a:hover,
	.practiceAreasCTA2 a:focus {
		color: #707070
	}
	
	.practiceAreasCTA2 p {
		margin: 1rem
	}
	
	.practiceAreasCTA2 h2 {
		text-transform: uppercase;
		color: #707070;
		font-size: 1.599rem;
		margin: 2.5rem 1rem 0 1rem
	}
	
	.practiceAreasCTA2 .button {
		margin: 1rem 0 2rem 0;
		background-color: #707070;
		padding: .5rem 1rem!important;
		font-size: 1.299rem
	}
	
	.practiceAreasCTA2 .button:hover,
	.practiceAreasCTA2 .button:focus {
		background-color: #2e2e2e
	}
	
	.LifeStages {
		background-color: #fff;
		padding: 2rem 0
	}
	
	.LifeStages .slick-dots li button:before {
		color: #2e2e2e!important
	}
	
	.slider-container .slider {
		height: 100%;
		background: transparent
	}
	
	.slider-container .containerLeft {
		padding: 2rem
	}
	
	.featured-slide {
		background-color: #fff;
		cursor: default
	}
	
	.featured-slide-1 img {
		text-align: center;
		margin: auto
	}
	
	.LifeStages h2 {
		font-family: 'Roboto', sans-serif;
		color: #707070;
		font-weight: 600;
		text-align: center;
		font-size: 2.899rem;
		font-style: italic
	}
	
	.LifeStages h3 {
		font-family: 'Roboto', sans-serif;
		color: #707070;
		font-weight: 600;
		text-align: center;
		font-size: 2.299rem;
		font-style: italic
	}
	
	.LifeStages p {
		text-align: left;
		color: #555;
		font-size: 1.299rem;
		line-height: 1.5rem
	}
	
	.LifeStages a:link,
	.LifeStages a:visited {
		font-family: 'Roboto', sans-serif;
		font-style: italic;
		text-align: right!important;
		font-size: 1.499rem;
		text-decoration: underline;
		color: #707070;
		transition: all 0.25s ease-in-out
	}
	
	.LifeStages a:hover {
		color: #2e2e2e
	}
	
	.slider-nav-container .slide-link {
		cursor: pointer
	}
	
	.slider-nav-container img {
		padding: 8px;
		margin: 0 auto;
		width: 150px
	}
	
	.slider-nav-container .slick-current img {
		border: solid 4px #707070;
		padding: 4px
	}
	
	.iframe-responsive {
		overflow: hidden;
		padding-bottom: 56.25%;
		position: relative;
		height: 0
	}
	
	.iframe-responsive iframe {
		left: 0;
		top: 0;
		height: 100%;
		width: 100%;
		position: absolute;
		border: 0
	}
	
	.super_lawyers_badge tbody {
		background-color: initial
	}
	
	.super_lawyers_badge tr {
		background-color: initial!important
	}
	
	.biocardSection .callout {
		position: relative;
		padding: 0;
		border: none;
		border-radius: 0;
		background-color: #fff;
		max-width: 310px;
		margin: 2rem auto 3rem auto;
		box-shadow: 2px 3px 5px 1px rgba(0, 0, 0, .35);
		transition: all 0.25s ease-out
	}
	
	.biocardSection.About .callout:hover {
		box-shadow: 2px 3px 15px 1px rgba(0, 0, 0, .55)
	}
	
	.biocardSection .dropdown-pane {
		background-color: #969696;
		border: none;
		box-shadow: 2px 3px 5px 1px rgba(0, 0, 0, .35);
		padding: .5rem
	}
	
	.biocardSection .dropdown-pane h3 {
		color: #fff;
		font-family: 'Roboto', sans-serif;
		font-size: 1.4rem;
		line-height: 2rem;
		font-weight: 400;
		margin: 0;
		letter-spacing: -1px
	}
	
	.biocardSection .callout .sectionName {
		background-color: #fff;
		padding: .5rem
	}
	
	.biocardSection .callout .sectionName h2 {
		color: #969696;
		font-family: 'Roboto', sans-serif;
		font-size: 1.5rem;
		font-style: normal;
		margin: 0;
		transition: all 0.25s ease-out;
		font-weight: 400
	}
	
	.biocardSection .callout a {
		text-decoration: none!important
	}
	
	.biocardSection .callout .sectionName.Title {
		background-color: #969696
	}
	
	.biocardSection .callout .sectionName.Title h3 {
		color: #fff;
		font-family: 'Roboto', sans-serif;
		font-size: 1.3rem;
		line-height: 2rem;
		margin: 0;
		letter-spacing: -1px;
		font-style: italic
	}
	
	.biocardSection .callout .sectionSocial {
		background: #707070;
		padding: .5rem
	}
	
	.biocardSection .callout .sectionSocial i {
		color: #fff;
		font-size: 2rem;
		transition: all 0.25s ease-out
	}
	
	.biocardSection .callout .sectionSocial i:hover {
		color: #969696
	}
</style>
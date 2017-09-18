<?php
/**
 * RateIt StyleSheet with adaptations
 */
$star_url = elgg_normalize_url('mod/elgg_stars/vendors/rateit/star.gif');
$del_url = elgg_normalize_url('mod/elgg_stars/vendors/rateit/delete.gif');
?>

<?php if (false) : ?><style type="text/css"><?php endif; ?>

	.rateit {
	    display: -moz-inline-box;
	    display: inline-block;
	    position: relative;
	    -webkit-user-select: none;
	    -khtml-user-select: none;
	    -moz-user-select: none;
	    -o-user-select: none;
	    -ms-user-select: none;
	    user-select: none;
	    -webkit-touch-callout: none;
	}

    .rateit .rateit-range {
        position: relative;
        display: -moz-inline-box;
        display: inline-block;
        background: url(<?php echo $star_url ?>);
        height: 16px;
        outline: none;
    }

    .rateit .rateit-range * {
        display: block;
    }

    /* for IE 6 */
    * html .rateit, * html .rateit .rateit-range {
        display: inline;
    }

    /* for IE 7 */
    * + html .rateit, * + html .rateit .rateit-range {
        display: inline;
    }

    .rateit .rateit-hover, .rateit .rateit-selected {
        position: absolute;
        left: 0;
        top: 0;
        width: 0;
    }

    .rateit .rateit-hover-rtl, .rateit .rateit-selected-rtl {
        left: auto;
        right: 0;
    }

    .rateit .rateit-hover {
        background: url(<?php echo $star_url ?>) left -32px;
        color: rgb(239, 197, 41);
    }

    .rateit .rateit-hover-rtl {
        background-position: right -32px;
    }

    .rateit .rateit-selected {
        background: url(<?php echo $star_url ?>) left -16px;
        color: rgb(191,66,66);
    }

    .rateit .rateit-selected-rtl {
        background-position: right -16px;
    }

    .rateit .rateit-preset {
        background: url(<?php echo $star_url ?>) left -48px;
        color: rgb(239, 107, 34);
    }

    .rateit .rateit-preset-rtl {
        background: url(<?php echo $star_url ?>) left -48px;
    }

    .rateit button.rateit-reset {
        background: url(<?php echo $del_url ?>) 0 0;
        width: 16px;
        height: 16px;
        display: -moz-inline-box;
        display: inline-block;
        float: left;
        outline: none;
        border: none;
        padding: 0;
    }

    .rateit .rateit-reset span {
        display: none;
    }

    .rateit button.rateit-reset:hover, .rateit button.rateit-reset:focus {
        background-position: 0 -16px;
    }


	.rateit-font {
	    font-size: 40px;
	    line-height: 1em;
	    margin-top: 4px;
	}

    .rateit-font .rateit-range {
        background: none;
        height: auto;
    }

    .rateit-font .rateit-empty {
        color: #ccc;
    }

    .rateit-font .rateit-range > div {
        background: none;
        overflow: hidden;
        cursor: default;
    }

	.rateit.rateit-font .rateit-reset {
	    font-size: inherit;
	    background: none;
	    width: 0.6em;
	    height: 0.6em;
	    margin-top: 0.2em;
	    background: gray;
	    border-radius: 50%;
	    position: relative;
	}

    .rateit.rateit-font .rateit-reset span {
        display: block;
        font-weight: bold;
        color: white;
        height: calc(50% - 0.045em);
        top: 0;
        position: absolute;
        border-bottom: 0.09em solid white;
        width: 72%;
        margin-left: 14%;
    }


	.rateit.rateit-font .rateit-reset:hover, .rateit.rateit-font button.rateit-reset:focus {
	    background: #e6574b; /* Old browsers */
	    background: radial-gradient(ellipse at center, #e6574b 55%,#f6836b 77%,#f9d3cc 100%);/* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
	    background-position: 0 0;
	}



	// Custom

	.elgg-form-stars-rate {
		margin: 0;
		padding: 0;
	}
	.elgg-form-stars-rate fieldset {
		margin: 0;
		padding: 0;
	}
	.elgg-form-stars-rate fieldset > div {
		margin-bottom: 0;
	}
	.elgg-form-stars-rate input[type="submit"] {
		display: none;
	}

	.elgg-stars-rating-caption {
		width: 100%;
		font-size: 90%;
		text-align: center;
	}
	
	<?php if (false) : ?></style><?php endif; ?>

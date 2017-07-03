<?php
/**
 * Template Name: Request Quote
 */
?>

<?php get_header(); ?>

<section data-id="quote" id="content" role="main" class="quote">

  <div class="pageSection quote_intro">
    <h2 class="pageSection_title">Request a Quote</h2>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="quote_introText">
            <p>
              Use this form to request a quote for any product or service you might need. By providing
              the necessary information, we will surely provide you a proposal in a timely
              manner. After submitting this form, a representative will respond to you shortly.
            </p>
            <p>
              For immediate concerns, you can reach us at <span>(02) 959 6837</span>. You may visit our
              <a target="_blank" href="/contact-us">Contact</a> page for other contact details.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="quote_form">
            <?php echo do_shortcode('[contact-form-7 id="113" title="Request Quote"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<?php get_footer(); ?>
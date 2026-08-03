<?php
/**
 * FAQ blok + FAQPage JSON-LD schema.
 * Očekává $faq_items = [['q' => '...', 'a' => '...'], ...]
 * Volitelně $faq_id_prefix pro unikátní ID v případě více FAQ na stránce.
 */
$faq_id_prefix = $faq_id_prefix ?? 'faq';
?>
<section class="faq-block" aria-labelledby="<?= $faq_id_prefix ?>-heading">
  <h2 id="<?= $faq_id_prefix ?>-heading">Časté otázky</h2>
  <dl class="faq-list">
    <?php foreach ($faq_items as $i => $item): ?>
    <div class="faq-item">
      <dt class="faq-question">
        <button
          aria-expanded="false"
          aria-controls="<?= $faq_id_prefix ?>-answer-<?= $i ?>"
          id="<?= $faq_id_prefix ?>-q-<?= $i ?>"
        ><?= htmlspecialchars($item['q'], ENT_QUOTES, 'UTF-8') ?></button>
      </dt>
      <dd class="faq-answer" id="<?= $faq_id_prefix ?>-answer-<?= $i ?>" aria-labelledby="<?= $faq_id_prefix ?>-q-<?= $i ?>" hidden>
        <?= $item['a'] /* HTML povoleno – autor odpovídá za bezpečnost obsahu */ ?>
      </dd>
    </div>
    <?php endforeach; ?>
  </dl>
</section>

<!-- FAQPage JSON-LD -->
<script type="application/ld+json">
<?= json_encode([
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => array_map(function ($item) {
        return [
            '@type'          => 'Question',
            'name'           => $item['q'],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => strip_tags($item['a'])],
        ];
    }, $faq_items),
], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>

<script>
// Jednoduchý accordion bez závislostí
(function() {
  document.querySelectorAll('.faq-item button').forEach(function(btn) {
    btn.addEventListener('click', function() {
      var expanded = this.getAttribute('aria-expanded') === 'true';
      this.setAttribute('aria-expanded', !expanded);
      var answer = document.getElementById(this.getAttribute('aria-controls'));
      if (expanded) { answer.hidden = true; } else { answer.hidden = false; }
    });
  });
})();
</script>

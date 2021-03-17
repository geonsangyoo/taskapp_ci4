<?= $this->extend("layouts/default") ?>
<?= $this->section("title") ?>Home<?= $this->endSection("title") ?>
<?= $this->section("content") ?>
  <h1>Tasks</h1>
  <ul>
    <?php foreach ($tasks as $task): ?>
        <li>
          <?= $task['id']; ?>
          <?= $task['description']; ?>
        </li>
    <?php endforeach; ?>
  </ul>
<?= $this->endSection() ?>

---
layout: default
---
<div class="topnav">
  <a href="/">Home</a>
  <a href="./experiences.html">Experiences</a>
  <a href="./projects.html" class="active">Projects</a>
  <a href="./experiences.html">Miscellaneous</a>
</div>

<div id="grid" class="tab-content active">
  <div class="grid-container">
    <div class="item white">
      <div class="content">
        <h2>Meta-TTT</h2>
        <p>Test-time domain adaptation is a challenging task that aims to adapt a pre-trained model to limited, unlabeled target data during inference. Current methods that rely on self-supervision and entropy minimization underperform when the self-supervised learning (SSL) task does not align well with the primary objective. Additionally, minimizing entropy can lead to suboptimal solutions when there is limited diversity within minibatches. This project introduces a meta-learning minimax framework for test-time training on batch normalization (BN) layers, ensuring that the SSL task aligns with the primary task while addressing minibatch overfitting.</p>
        <a href="https://github.com/TAOC0002/domain_adapter.git" target="_blank"><i class="fa-brands fa-github"></i>&nbsp;Code</a><br />
        <a href="https://arxiv.org/abs/2410.01709" target="_blank"><i class="fa-solid fa-file"></i>&nbsp;Paper</a>
      </div>
    </div>
    <div class="item white">
      <div class="content">
        <h2>Mamba implementation on the induction head task</h2>
        <p>Adapted from the implementation of <a href="https://github.com/alxndrTL/mamba.py" target="_blank">alxndrTL/mamba.py</a> and <a href="https://github.com/hrbigelow/mamba-recall" target="_blank">hrbigelow/mamba-reall</a> in PyTorch with architectural modifications. This is the plaintext, HE-friendly version of Mamba for secure inference. The model consists of two MambaBlock layers with polynomially approximated SiLU and Softplus activation functions. RMSNorm is only applied once before the output layer that converts embeddings back to tokens and thus does not need to be included in the HE implementation. </p>
        <a href="https://github.com/TAOC0002/mamba_he.git" target="_blank"><i class="fa-brands fa-github"></i>&nbsp;Code</a>
      </div>
    </div>
  </div>
</div>
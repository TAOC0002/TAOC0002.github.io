---
layout: default
---
<div class="topnav">
  <a href="/">Home</a>
  <a href="./experiences.html">Experiences</a>
  <a href="./projects.html" class="active">Projects</a>
  <a href="./miscell.html">Miscellaneous</a>
</div>

<div id="grid" class="tab-content active">
  <div class="grid-container">
    <div class="item white">
      <div class="content">
        <h2>Meta-TTT</h2>
        <h3>Research Project</h3>
        <p>Test-time domain adaptation is a challenging task that aims to adapt a pre-trained model to limited, unlabeled target data during inference. Current methods that rely on self-supervision and entropy minimization underperform when the self-supervised learning (SSL) task does not align well with the primary objective. Additionally, minimizing entropy can lead to suboptimal solutions when there is limited diversity within minibatches. This project introduces a meta-learning minimax framework for test-time training on batch normalization (BN) layers, ensuring that the SSL task aligns with the primary task while addressing minibatch overfitting.</p>
        <a href="https://github.com/TAOC0002/domain_adapter.git" target="_blank"><i class="fa-brands fa-github"></i>&nbsp;Code</a><br />
        <a href="https://arxiv.org/abs/2410.01709" target="_blank"><i class="fa-solid fa-file"></i>&nbsp;Paper</a>
      </div>
    </div>
    <div class="item white">
      <div class="content">
        <h2>taochen at SemEval-2022 Task 5</h2>
        <h3>Research Project</h3>
        <p>This is a multi-modal deep learning system for the Multimedia Automatic Misogyny Identification (MAMI) challenge, a SemEval task of identifying and classifying misogynistic messages in online memes. I adapted multi-task learning for the multimodal subtasks of the MAMI challenge to transfer knowledge among the correlated subtasks and leveraged ensemble learning for synergistic integration of models individually trained for the subtasks.</p>
        <a href="https://github.com/TAOC0002/semeval22-task5.git" target="_blank"><i class="fa-brands fa-github"></i>&nbsp;Code</a><br />
        <a href="https://aclanthology.org/2022.semeval-1.89/" target="_blank"><i class="fa-solid fa-file"></i>&nbsp;Paper</a><br />
        <a href="https://aclanthology.org/2022.semeval-1.89.mp4" target="_blank"><i class="fa-solid fa-video"></i>&nbsp;Video</a>
      </div>
    </div>
    <div class="item white">
      <div class="content">
        <h2>Mamba-HE</h2>
        <h3>Work-related Project</h3>
        <p>Adapted from the implementation of <a href="https://github.com/alxndrTL/mamba.py" target="_blank">alxndrTL/mamba.py</a> and <a href="https://github.com/hrbigelow/mamba-recall" target="_blank">hrbigelow/mamba-reall</a> in PyTorch with architectural modifications. This is the plaintext, HE-friendly version of Mamba for secure inference. The model consists of two MambaBlock layers with polynomially approximated SiLU and Softplus activation functions.</p>
        <a href="https://github.com/TAOC0002/mamba_he.git" target="_blank"><i class="fa-brands fa-github"></i>&nbsp;Code</a>
      </div>
    </div>
    <div class="item white">
      <div class="content">
        <h2>KAPLE</h2>
        <h3>Undergraduate Final Year Project</h3>
        <p>KAPLE is a Knowledgeable Aadapter-based model for Pre-trained Language Embedding. In this study, I start from the <a href="https://arxiv.org/abs/2002.01808" target="_blank">K-Adapter</a> paper, that supports continual knowledge infusion into language models. Novel adjustments such as joint optimization, contrastive learning and knowledge distillation are combined to further improve the model's performance on sentence-pair modeling tasks (e.g. NLI). I extended this work to patent document retrieval, and show that our new adaptation of K-Adapter work well on retrieval tasks.</p>
        <a href="https://github.com/TAOC0002/kaple.git" target="_blank"><i class="fa-brands fa-github"></i>&nbsp;Code</a>
      </div>
    </div>
    <div class="item white">
      <div class="content">
        <h2>IE4717 Web Application and Design</h2>
        <h3>Course Project</h3>
        <p>This is a school project on website design. I implemented the backend system for a fictional dental clinic on scheduling and managing dental appointements with patients and dentists, user login and registration, as well as leave application for the clinic's staff.</p>
        <a href="https://github.com/TAOC0002/ie4717.git" target="_blank"><i class="fa-brands fa-github"></i>&nbsp;Code</a>
      </div>
    </div>
  </div>
</div>
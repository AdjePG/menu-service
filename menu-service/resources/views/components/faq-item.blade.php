@vite([
    "resources/css/components/faq-item.sass"
])

<article class="question">
    <div class="question-title">
        <p>{{$faq["title"]}}</p>
        <button type="button" class="question-btn">
            <span class="plus-icon">
                <i class="far fa-plus-square"></i>
            </span>
            <span class="minus-icon">
                <i class="far fa-minus-square"></i>
            </span>
        </button>
    </div>
    <div class="question-text">
        <p>{{$faq["description"]}}</p>
    </div>
</article>
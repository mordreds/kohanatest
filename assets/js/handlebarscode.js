var template = $('#bloglist').html();

var templateScript = Handlebars.compile(template);

var context = {
    'blogPosts': [
        {
            'postId' : 1,
            'image_src': "/assets/upload/tech_blog_01.jpg",
            'heading' : "Top 10 phone applications and 2017 mobile design awards",
            'content' : "Aenean interdum arcu blandit, vehicula magna non, placerat elit. " +
                "Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. " +
                "Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.",
            "tag" : "Gadgets",
            'time_created' : "21 July, 2017",
            'author' : "Matilda",
            'views' : "1114"
        }
    ]
};

var generatedHTML = templateScript(context);

$('.blog-list').html(generatedHTML);
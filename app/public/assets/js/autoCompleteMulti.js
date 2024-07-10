    function create_autocomplete(element) {
        var inputName = element.replace("#", '');
        const autoComp = new autoComplete({
            data: {
                src: async() => {
                    const source = await fetch(base_url + "api/auto_item");
                    const data = await source.json();
                    return data;
                },
                key: ["item_name"]
            },
            selector: element,
            maxResults: 10,
            resultsList: {
                render: true,
                container: function(source) {
                    source.setAttribute("id", "autoComplete_list");
                },
                element: "ul",
                destination: document.querySelector(element),
                position: "afterend",
            },
            resultItem: {
                content: function(data, source) {
                    source.innerHTML = data.match;
                },
                element: "li",
            },
            noResults: function() {
                const result = document.createElement("li");
                result.setAttribute("class", "no_result");
                result.setAttribute("tabindex", "1");
                result.innerHTML = "No Results";
                document.querySelector("#autoComplete_list").appendChild(result);
            },

            placeHolder: "Ketik Cari Barang...",
            threshold: 0,
            searchEngine: "strict",
            highlight: true,
            dataAttribute: { tag: "value", value: "" },
            onSelection: feedback => {
                document.querySelector(element).innerHTML = feedback.selection.food;
                document
                    .querySelector(element)
                    .setAttribute("placeholder", `${event.target.closest(".autoComplete_result").id}`);

                const selection = feedback.selection.value[feedback.selection.key];
                document.querySelector(element).value = selection;
                $('input:hidden[name=' + inputName + ']').val(feedback.selection.value.item_id);
                console.log(feedback.selection.value.item_id);
                console.log(selection);
                // console.log(feedback);
            }
        });

    }
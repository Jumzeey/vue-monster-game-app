<template>
    <div class="contain">
        <div>
            <div class="justify-center flex flex-row">
                <button  v-for="category in categories" v-bind:key="category.id"
                    @click="filter(category)" :class="{selected: selectedCat === category}">{{category}}</button>
                <button @click="filter('all')" :class="{selected: selectedCat === 'all'}">All</button>
            </div>
            <div class="mt-4 grid grid-cols-2 gap-2 md:grid-cols-3 lg:grid-cols-4  h-1/6">
                <div v-show="selectedCat === preview.cat || selectedCat === 'all'" v-for="preview in previews" v-bind:key="preview.id"
                    :class="'preview ' + preview.cat">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            categories: [
                'Events',
                'K1-Tours',
                'Birthdays',
                'Weddings',
            ],
            previews: [
                { cat: 'Events' },
                { cat: 'Events' },
                { cat: 'Events' },
                { cat: 'K1-Tours' },
                { cat: 'K1-Tours' },
                { cat: 'K1-Tours' },
                { cat: 'K1-Tours' },
                { cat: 'Birthdays' },
                { cat: 'Birthdays' },
                { cat: 'Weddings' },
                { cat: 'Weddings' },
                { cat: 'Weddings' },
            ],
            selectedCat: 'all',
        }
    },

    methods: {
        filter(selection) {
            this.selectedCat = selection;
        }
    },
    mounted() {
        this.previews = _.shuffle(this.previews);
    }
}
</script>
<style lang="scss" scoped>
.contain {
    background: #fff;
    max-width: 1300px;
    width: 100%;
    margin: 0 auto;
    border-radius: 4px;
    padding: 20px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
    grid-gap: 10px;
}
.preview {
    height: 100px;
    width: 0%;
    opacity: 0;
    animation: appear .5s ease-in-out forwards;
}

.Events {
    background: gold;
}

.K1-Tours {
    background: #333;
}

.Birthdays {
    background: #ddd;
}
.Weddings {
    background: #46a;
}



button {
    cursor: pointer;
    margin: 5px 5px;
    border-radius: 10px;
    padding: 5px 10px;
    background: #ddd;
    border: 1px solid #333;
    transition: .3s ease-in-out;
    transition-property: background, border, color;

    &.selected {
        background: #fff;
        color: #333;
        border: 1px solid #333;
    }

    &:focus {
        outline: none;
    }

    &:hover {
        color: #fff;
        background: #333;
        border: 1px solid #333;
    }
}

@keyframes appear {
    to {
        width: 100%;
        opacity: 1;
    }
}
</style>
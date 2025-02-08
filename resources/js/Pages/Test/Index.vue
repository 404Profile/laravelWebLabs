<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {useForm} from "@inertiajs/vue3";

const form = useForm({
    name: '',
    elementEcosystem: null,
    eating: '',
    wolf: false,
    rabbit: false,
    bear: false,
})

const reset = () => {
    form.reset();
}

const submitForm = () => {
    form.post(route('test.validate'), {
        preserveScroll: true,
    });
}
</script>

<template>
    <AppLayout title="Test">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Test
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                    <form @submit.prevent="submitForm">
                        <div class="space-y-12">
                            <div class="border-b border-gray-900/10 pb-12 p-6">
                                <h2 class="text-base font-semibold leading-7 text-gray-900">
                                    Тест
                                </h2>
                                <p class="mt-1 text-sm leading-6 text-gray-600">
                                    Тест по теме "Основы экологии"
                                </p>

                                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                    <div class="sm:col-span-4">
                                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">
                                            Ваше ФИО:
                                        </label>
                                        <div class="mt-2">
                                            <div class="flex shadow-sm rounded-md ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-amber-600 sm:max-w-md">
                                                <span class="flex select-none items-center pl-3 text-gray-700 sm:text-sm">
                                                    ФИО:
                                                </span>
                                                <input v-model="form.name" type="text" name="name" id="name" class="focus:outline-none block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 sm:text-sm sm:leading-6" placeholder="введите ФИО">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="elementEcosystem" class="block text-sm font-medium leading-6 text-gray-900">
                                            Какой из перечисленных факторов НЕ является биотическим элементом экосистемы? (Вода)
                                        </label>
                                        <div class="mt-2">
                                            <select v-model="form.elementEcosystem" id="elementEcosystem" name="elementEcosystem" class="px-3 appearance-none block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-amber-600 focus:outline-none sm:max-w-xs sm:text-sm sm:leading-6">
                                                <option value="0">Выберите</option>
                                                <option value="1">Растения</option>
                                                <option value="2">Животные</option>
                                                <option value="3">Почва</option>
                                                <option value="4">Вода</option>
                                                <option value="5">Микроорганизмы</option>
                                                <option value="6">Грибы</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="sm:col-span-4">
                                        <label for="eating" class="block text-sm font-medium leading-6 text-gray-900">
                                            Укажите организм, занимающий вершину пищевой пирамиды: (Человек)
                                        </label>
                                        <div class="mt-2">
                                            <div
                                                class="flex shadow-sm rounded-md ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-amber-600 sm:max-w-md">
                                                <span class="flex select-none items-center pl-3 text-gray-700 sm:text-sm">
                                                    Ответ:
                                                </span>
                                                <input type="text" name="eating" id="eating" v-model="form.eating" class="focus:outline-none block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 sm:text-sm sm:leading-6" placeholder="введите ответ">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sm:col-span-4">
                                        <fieldset>
                                            <legend class="text-sm font-semibold leading-6 text-gray-900">
                                                Какие из перечисленных видов относятся к хищникам? (Волк, медведь)
                                            </legend>
                                            <div class="mt-6 space-y-6">
                                                <div class="relative flex gap-x-3">
                                                    <div class="flex h-6 items-center">
                                                        <input v-model="form.wolf" id="wolf" name="wolf" type="checkbox" class="accent-amber-600 h-4 w-4">
                                                    </div>
                                                    <div class="text-sm">
                                                        <label for="wolf" class="font-medium text-gray-900">
                                                            Волк
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="relative flex gap-x-3">
                                                    <div class="flex h-6 items-center">
                                                        <input v-model="form.rabbit" id="rabbit" name="rabbit" type="checkbox" class="accent-amber-600 h-4 w-4">
                                                    </div>
                                                    <div class="text-sm">
                                                        <label for="rabbit" class="font-medium text-gray-900">
                                                            Кролик
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="relative flex gap-x-3">
                                                    <div class="flex h-6 items-center">
                                                        <input v-model="form.bear" id="bear" name="bear" type="checkbox" class="accent-amber-600 h-4 w-4">
                                                    </div>
                                                    <div class="text-sm">
                                                        <label for="bear" class="font-medium text-gray-900">
                                                            Медведь
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 flex items-center justify-end gap-x-6 px-6 pb-4">
                            <button type="reset" @click="reset"
                                    class="ml-4 relative grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus-visible:ring-2 rounded-lg gap-1.5 px-3 py-2 text-sm inline-grid shadow-sm bg-white text-gray-950 hover:bg-gray-50 ring-1 ring-gray-950/10">
                                Очистить
                            </button>
                            <button type="submit" @click="submitForm"
                                    class="relative grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus-visible:ring-2 rounded-lg gap-1.5 px-3 py-2 text-sm inline-grid shadow-sm bg-amber-600 text-white hover:bg-amber-500 focus-visible:ring-amber-500/50">
                                Отправить
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </AppLayout>
</template>

<template>
    <v-app>
        <v-content>
            <v-container>
                <v-layout align-content-center justify-center>
                    <v-flex xs12 md9 lg10>
                        <v-card class="background">
                            <v-responsive class="text-center pt-3">
                                <img src="//images.agoramedia.com/wte3.0/gcms/redesign/due-date-calculator-thumb.svg">

                            </v-responsive>
                            <v-card-text>
                                <h1 class="text-center headingCss headline">Due Date Calculator</h1>
                                <h5 class="text-center">Choose from a variety of ways to predict your due date.</h5>
                            </v-card-text>
                            <v-card-actions>
                                <v-layout justify-center>
                                    <v-flex xs12 sm6 md5 lg5>
                                        <v-form justify-center>
                                            <h5 class="text-center">Calculation Method</h5>
                                            <v-select
                                                :items="items"
                                                item-text="label"
                                                item-value="value"
                                                solo
                                                v-model="selectedItems.label"
                                                @change="checkCalculationMethod"
                                            >

                                            </v-select>
                                            <v-spacer></v-spacer>
                                            <h5 class="text-center" v-html="textLabel"></h5>
                                            <v-text-field
                                                clearable
                                                label="date"
                                                @click="datePicker"
                                                solo
                                                :return-value.sync="picker"
                                                lazy
                                                transition="scale-transition"
                                                v-model="picker"
                                            ></v-text-field>
                                            <v-date-picker v-if="date" @change=" date = false"></v-date-picker>
                                            <v-spacer></v-spacer>
                                            <h5 class="text-center text-purple" v-if="period"> Cycle Length</h5>
                                            <v-select
                                                :items="days"
                                                item-text="title"
                                                item-value="key"
                                                solo
                                                v-model="selectedDays"
                                                v-if="period"
                                            >
                                            </v-select>

                                            <v-flex offset-xs2 offset-md2 offset-lg2>
                                                <v-radio-group v-model="ivf" v-if="ivf">
                                                    <v-radio label="IVF 3 Day Transfer Date" value="1"></v-radio>
                                                    <v-radio label="IVF 5 Day Transfer Date" value="2"></v-radio>
                                                </v-radio-group>
                                            </v-flex>
                                            <v-flex d-flex  v-if="period">
                                                <v-flex md6 pr-2>
                                                    <h5 class="text-center"> Weeks </h5>
                                                    <v-select
                                                        :items="days"
                                                        item-text="title"
                                                        item-value="key"
                                                        solo
                                                        v-model="selectedDays"
                                                        v-if="period"
                                                    >
                                                    </v-select>
                                                </v-flex>

                                                <v-flex md6 pl-2>
                                                    <h5 class="text-center"> Days </h5>
                                                    <v-select
                                                        :items="days"
                                                        item-text="title"
                                                        item-value="key"
                                                        solo
                                                        v-model="selectedDays"
                                                        v-if="period"
                                                    >
                                                    </v-select>
                                                </v-flex>
                                            </v-flex>
                                            <v-btn rounded justify-center>Cancel</v-btn>
                                        </v-form>
                                    </v-flex>

                                </v-layout>

                            </v-card-actions>
                        </v-card>
                    </v-flex>
                </v-layout>

            </v-container>
        </v-content>

    </v-app>
</template>
<style>
    .background {
        background-image: linear-gradient(to bottom, rgba(235, 255, 243, 0.8), rgba(222, 255, 251, 0.8) 26%, rgba(182, 223, 241, 0.8));
    }

    .headingCss {
        color: #603091;
    }

    .theme--dark.v-label {
        color: hsl(207, 1%, 10%) !important;
    }
    @media only screen and (max-width: 959px){
    .container {
        padding: 0!important;

    }}
</style>
<script>
    export default {
        name: 'Home',
        data() {
            return {
                items: [
                    {"label": "Last Period", "value": "1"},
                    {"label": "Conception Date", "value": "2"},
                    {"label": "IVF", "value": "3"},
                    {"label": "Ultrasound", "value": "4"}
                ],
                days: [
                    {'title': '24 Days', 'key': '1'},
                    {'title': '36 Days', 'key': '2'},
                    {'title': '28 Days', 'key': '3'},
                    {'title': '30 Days', 'key': '4'},
                    {'title': '32 Days', 'key': '5'},
                ],
                period: true,
                ivf: false,
                selectedItems: {
                    label: '1'
                },
                selectedDays: {
                    key: '2',
                },
                date: false,
                textLabel: 'The first day of your period',
                picker: new Date().toISOString().substr(0, 10),
            }
        },
        methods: {
            datePicker() {
                this.date = true;
            },
            checkCalculationMethod() {
                let val = this.selectedItems.label;
                if (val !== '1') {
                    this.period = false;
                    if (val === '2') {
                        this.textLabel = 'Conception Day';
                        this.ivf = false;
                    }
                    if (val === '3') {
                        this.textLabel = 'Date of Transfer';
                        this.ivf = true;
                    }
                    if (val === '4') {
                        this.textLabel = 'Date of Ultrasound';
                        this.ivf = false;
                    }

                } else {
                    this.period = true;
                    this.textLabel = 'The first day of your period';
                    this.ivf = false;
                }
            }
        }
    }
</script>
